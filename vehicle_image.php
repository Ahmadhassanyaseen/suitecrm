<?php
/**
 * Vehicle Image Entry Point - serves vehicle images without authentication
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$db = DBManagerFactory::getInstance();

// Check if we have the required parameters
if (empty($_REQUEST['id']) || empty($_REQUEST['type'])) {
    http_response_code(400);
    die("Missing required parameters");
}

// Only allow vehicle_xl module for security
if ($_REQUEST['type'] !== 'vehicle_xl') {
    http_response_code(403);
    die("Unauthorized module type");
}

require_once("data/BeanFactory.php");

// Get the vehicle record
$vehicle = BeanFactory::getBean('vehicle_xl', $_REQUEST['id']);

if (empty($vehicle->id)) {
    http_response_code(404);
    die("Vehicle not found");
}

// Check if the image field exists and has a value
$image_field = 'images_c';
if (isset($vehicle->$image_field) && !empty($vehicle->$image_field)) {
    $image_filename = $vehicle->$image_field;
    $image_path = "upload://{$_REQUEST['id']}_{$image_field}";

    // Check if file exists
    if (file_exists($image_path)) {
        // Get file info
        $file_size = filesize($image_path);
        $mime_type = mime_content_type($image_path);

        // Set appropriate headers for image serving
        header('Content-Type: ' . $mime_type);
        header('Content-Length: ' . $file_size);
        header('Cache-Control: public, max-age=3600'); // Cache for 1 hour
        header('X-Content-Type-Options: nosniff');

        // Read and output the file
        readfile($image_path);
        exit;
    }
}

// If no image found, serve a default no-image placeholder
$no_image_path = 'include/SugarFields/Fields/Image/no_image.png';
if (file_exists($no_image_path)) {
    $file_size = filesize($no_image_path);
    header('Content-Type: image/png');
    header('Content-Length: ' . $file_size);
    header('Cache-Control: public, max-age=3600');
    header('X-Content-Type-Options: nosniff');
    readfile($no_image_path);
    exit;
}

// If even the no-image file doesn't exist, return a simple 1x1 transparent PNG
header('Content-Type: image/png');
header('Content-Length: 95'); // Size of a minimal 1x1 transparent PNG
header('Cache-Control: public, max-age=3600');
echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+M9QDwADhgGAWjR9awAAAABJRU5ErkJggg==');
exit;

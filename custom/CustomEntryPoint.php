<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

// CORS headers to allow requests from the frontend origin
header('Access-Control-Allow-Origin: http://127.0.0.1:5500');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

// echo "test";
if (isset($_POST)) {
    if ($_POST['action'] == 'save_lead') {
        echo json_encode(save_lead($_POST));
        exit;
    }
    if ($_POST['action'] == 'get_lead') {
        echo json_encode(get_lead($_POST));
        exit;
    }
    if ($_POST['action'] == 'send_mail') {
        echo json_encode(send_mail($_POST['id']));
        exit;
    }
    if ($_POST['action'] == 'get_vehicles') {
        echo json_encode(get_vehicles($_POST));
        exit;
    }
} else {
    echo 'Not a valid entry point';
}

function save_lead($data)
{
    $log_file = 'custom\customLogs.log';
    $log_message = '[' . date('Y-m-d H:i:s') . '] Lead saved: ' . json_encode($data) . "\n";
    file_put_contents($log_file, $log_message, FILE_APPEND);


    $pickup_lat_long = get_lat_long($data['pickup']);
    $dropoff_lat_long = get_lat_long($data['destination']);

    $distance = see_distance($pickup_lat_long['lat'], $pickup_lat_long['long'], $dropoff_lat_long['lat'], $dropoff_lat_long['long']);
    
    // return $distance;
    
    $vehicle  = BeanFactory::getBean('vehicle_xl' , $data['vehicle_id']);
    
    $price = floatval($data['service_length']) * floatval($vehicle->rate_c);
    // return $vehicle->rate_c;
    // return $price;
    $lead = BeanFactory::newBean('Leads');
    $lead->first_name = $data['first_name'];
    $lead->last_name = $data['last_name'];
    $lead->email1 = $data['email'];
    $lead->phone_work = $data['phone'];
    $lead->pickup_address_c = $data['pickup'];
    $lead->jjwg_maps_lng_c = $pickup_lat_long['long'];
    $lead->jjwg_maps_lat_c = $pickup_lat_long['lat'];
    $lead->event_date_c = $data['pickup_date'];
    $lead->vehicle_id_c = $data['vehicle_id'];
    $lead->dropoff_address_c = $data['destination'];
    $lead->service_type_c = $data['service_type'];
    $lead->service_length_c = $data['service_length'];
    $lead->passengers_c = $data['passengers'];
    $lead->distance_c = $distance['distance'];
    $lead->duration_c = $distance['duration'];
    $lead->total_price_c = $price;
    $lead->rate_c = $vehicle->rate_c;
    $lead->save();
    send_mail($lead->id);
    return [
        'success' => true,
        'message' => 'Lead saved successfully',
        'id' => $lead->id
    ];
}

function get_lead($data)
{
    $log_file = 'custom\customLogs.log';
    $log_message = '[' . date('Y-m-d H:i:s') . '] Lead saved: ' . json_encode($data) . "\n";
    file_put_contents($log_file, $log_message, FILE_APPEND);
    $result = array();


    $lead = BeanFactory::getBean('Leads', $data['id']);
    $result['first_name'] = $lead->first_name;
    $result['last_name'] = $lead->last_name;
    $result['email'] =$lead->email1;
    $result['phone'] = $lead->phone_work;
    $result['pickup'] = $lead->pickup_address_c;
    $result['pickup_date'] = $lead->event_date_c;
    $result['destination'] = $lead->dropoff_address_c;
    $result['service_type'] = $lead->service_type_c;
    $result['service_length'] =$lead->service_length_c;
    $result['passengers'] = $lead->passengers_c;
    $result['distance'] =  $lead->distance_c;
    $result['duration'] = $lead->duration_c;
    $result['total_price'] = $lead->total_price_c;
    $result['rate']  = $lead->rate_c;
    return $result;
}

function send_mail($id)
{
    $result = array();
    $log_file = 'custom\customLogs.log';
    $error_message = '[' . date('Y-m-d H:i:s') . '] Lead Mail : ' . json_encode($id) . "\n";
    file_put_contents($log_file, $error_message, FILE_APPEND);
    try {
        require_once './modules/EmailTemplates/EmailTemplate.php';
        $emailTemp = new EmailTemplate();
        $emailTemp->retrieve('d9e1054a-d14f-e675-da8c-68ee2282b8b4');
        $lead = BeanFactory::getBean('Leads', $id);
        $vehicle  = BeanFactory::getBean('vehicle_xl' , $lead->vehicle_id_c);

        if (empty($emailTemp->id)) {
            throw new Exception('Email template not found');
        }
        $bookinglink = "http://localhost/bpl/sendAgreement.php?id=".$id;
        $emailTemp->body_html = str_replace('$companyName', "Black Pearl Limo", $emailTemp->body_html);
        $emailTemp->body_html = str_replace('$firstName', $lead->first_name, $emailTemp->body_html);
        $emailTemp->body_html = str_replace('$lastName', $lead->last_name, $emailTemp->body_html);
        $emailTemp->body_html = str_replace('$email', $lead->email1, $emailTemp->body_html);
        $emailTemp->body_html = str_replace('$phone', $lead->phone_work, $emailTemp->body_html);
        $emailTemp->body_html = str_replace('$vehicleName', $vehicle->name, $emailTemp->body_html);
        $emailTemp->body_html = str_replace('$pickupLocation', $lead->pickup_address_c, $emailTemp->body_html);
        $emailTemp->body_html = str_replace('$dropoffLocation', $lead->dropoff_address_c, $emailTemp->body_html);
        $emailTemp->body_html = str_replace('$pickupDate', $lead->event_date_c, $emailTemp->body_html);
        $emailTemp->body_html = str_replace('$duration', $lead->service_length_c, $emailTemp->body_html);
        $emailTemp->body_html = str_replace('$distance', $lead->distance_c, $emailTemp->body_html);
        $emailTemp->body_html = str_replace('$rate', $lead->rate_c, $emailTemp->body_html);
        $emailTemp->body_html = str_replace('$service_type', $lead->service_type_c, $emailTemp->body_html);
        $emailTemp->body_html = str_replace('$totalPrice', $lead->total_price_c, $emailTemp->body_html);
       
        // Set up email
        $emailObj = new Email();
        $defaults = $emailObj->getSystemDefaultEmail();
        $vmail = new SugarPHPMailer();
        $vmail->From = $defaults['email'];
        $vmail->FromName = $defaults['name'];
        $vmail->setMailerForSystem();
        $vmail->ClearAllRecipients();
        $vmail->ClearReplyTos();
        $vmail->Subject = $emailTemp->subject;
        $vmail->AddAddress($lead->email1);
        $vmail->Body = $emailTemp->body_html;
        $vmail->AltBody = strip_tags($emailTemp->body_html);
        // Handle attachments if any
        $attachments = array();
        $vmail->handleAttachments($attachments);
        $vmail->prepForOutbound();
        // Set email object properties
        $emailObj->to_addrs = $lead->email1;
        $emailObj->cc_addrs = '';
        $emailObj->name = $emailTemp->subject;
        $emailObj->date_sent = TimeDate::getInstance()->nowDb();
        $emailObj->description_html = $emailTemp->body_html;
        $emailObj->description = strip_tags($emailTemp->body_html);
        $emailObj->from_addr = $vmail->From;
        $emailObj->modified_user_id = '1';
        $emailObj->created_by = '1';
        $emailObj->status = 'sent';
        $emailObj->type = 'out';
        $emailObj->parent_type = 'Leads';
        $emailObj->parent_id = $id;
        // Save email record
        $emailObj->save();
        // Send email k
        $emailSent = @$vmail->Send();
        if ($emailSent) {
            $emailObj->status = 'sent';
            $emailObj->save();
            if (!empty($id)) {
                $lead = BeanFactory::getBean('Leads', $id);
                if ($lead) {
                    // Try loading the correct relationship
                    if ($lead->load_relationship('emails')) {  // ✅ most correct link name
                        $lead->emails->add($emailObj->id);
                        $lead->save();
                    } elseif ($lead->load_relationship('emails_leads_rel')) {  // fallback
                        $lead->emails_leads_rel->add($emailObj->id);
                        $lead->save();
                    } else {
                        $log_message = '[' . date('Y-m-d H:i:s') . '] Error: Could not load emails relationship for lead ID: ' . $id . "\n";
                        file_put_contents($log_file, $log_message, FILE_APPEND);
                    }
                }
            }

            $result['success'] = true;
            $result['message'] = 'Lead Email sent successfully';
        } else {
            throw new Exception('Failed to send email: ' . $vmail->ErrorInfo);
        }

        // return ["success" => true , "message" => "Email sent successfully"];
    } catch (Exception $e) {
        // Log the error
        $error_message = '[' . date('Y-m-d H:i:s') . '] Error in Lead Email: ' . $e->getMessage() . "\n";
        file_put_contents($log_file, $error_message, FILE_APPEND);

        // Set error status
        if (isset($emailObj) && is_object($emailObj)) {
            $emailObj->status = 'send_error';
            $emailObj->save();
        }

        $result['success'] = false;
        $result['error'] = $e->getMessage();
    }

    return $result;
}

function get_vehicles($data)
{
    $log_file = 'custom\customLogs.log';
    $log_message = '[' . date('Y-m-d H:i:s') . '] Vehicles: ' . json_encode($data) . "\n";
    file_put_contents($log_file, $log_message, FILE_APPEND);
    global $db;
    $query = 'SELECT * FROM vehicle_xl AS v LEFT JOIN vehicle_xl_cstm AS vc ON v.id = vc.id_c; ';
    $result = $db->query($query);
    $vehicles = array();
    while ($row = $result->fetch_assoc()) {
        $vehicles[] = $row;
    }
    return $vehicles;
}

function get_lat_long($address)
{
    $address = str_replace(' ', '+', $address);
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.radar.io/v1/geocode/forward?query=' . $address,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: prj_live_pk_54b2a02354afc907c3550d5b7e709b61937d9d88'
            // 'Authorization: prj_live_pk_e929d749ecc96426f1ea2790d3d96e4b42db8703'
            // Amplify Themes
            // 'Authorization: prj_live_pk_2fa076eaf5ac1c59953ae96583170ea90df6c76c'
        ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $response = json_decode($response, true);
    $result = array();

    if (isset($response['meta']['code']) && $response['meta']['code'] == 200) {
        if (isset($response['addresses'][0]['geometry']['coordinates'])) {
            $result['lat'] = $response['addresses'][0]['geometry']['coordinates'][1];
            $result['long'] = $response['addresses'][0]['geometry']['coordinates'][0];
        } else {
            $result['error'] = 'Coordinates not found';
        }
    } else {
        $result['error'] = isset($response['meta']['message']) ? $response['meta']['message'] : 'Error fetching data';
    }

    return $result;
}
function see_distance($origin_lat, $origin_lng, $dest_lat, $dest_lng)
{
    $origin = urlencode("$origin_lat,$origin_lng");
    $destination = urlencode("$dest_lat,$dest_lng");

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.radar.io/v1/route/matrix?origins=$origin&destinations=$destination&mode=car&units=metric",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: prj_live_pk_54b2a02354afc907c3550d5b7e709b61937d9d88'
        ),
    ));

    $response = curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    $result = [
        'distance' => 'Null',
        'duration' => 'Null',
        'response' => null,
        'url' => "https://api.radar.io/v1/route/matrix?origins=$origin&destinations=$destination&mode=car&units=metric"
    ];

    if ($response) {
        $response = json_decode($response, true);
        $result['response'] = $response;

        if ($httpCode === 200 && isset($response['matrix'][0][0])) {
            $result['distance'] = round($response['matrix'][0][0]['distance']['value'] / 1609.34, 2);
            $result['duration'] = $response['matrix'][0][0]['duration']['text'];
        }
    }

    if ($result['distance'] === 0) {
        $result['distance'] = 1;
    }

    return $result;
}

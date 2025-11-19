<?php
$module_name = 'vehicle_xl';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'rate_c',
            'label' => 'LBL_RATE',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'vehicle_source',
            'studio' => 'visible',
            'label' => 'LBL_VEHICLE_SOURCE',
          ),
          1 => 
          array (
            'name' => 'vehicle_cetagory',
            'studio' => 'visible',
            'label' => 'LBL_VEHICLE_CETAGORY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'images_c',
            'studio' => 'visible',
            'label' => 'LBL_IMAGES',
            'customCode' => '{if strlen($fields.images_c.value) > 0}<img src="index.php?entryPoint=vehicle_image&id={$fields.id.value}&type=vehicle_xl" style="max-width: 400px;" alt="Vehicle Image">{else}<img src="" style="max-width: 400px;" alt="No Image">{/if}',
          ),
          1 => 
          array (
            'name' => 'min_hours',
            'label' => 'LBL_MIN_HOURS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'passenger',
            'label' => 'LBL_PASSENGER',
          ),
          1 => 
          array (
            'name' => 'facilities',
            'studio' => 'visible',
            'label' => 'LBL_FACILITIES',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'bags',
            'label' => 'LBL_BAGS',
          ),
          1 => 
          array (
            'name' => 'promhourly',
            'label' => 'LBL_PROMHOURLY',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
      ),
    ),
  ),
);
;
?>

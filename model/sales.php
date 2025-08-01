<?php
/**
 * SECTION: Get all model from parent  forms
 */

use SmplfyCore\SMPLFY_Log;

SMPLFY_Log::info('/model/sales.php');


// Fallback for testing or unexpected use
if (empty($form_data) || !is_array($form_data) || !isset($form_data['field'])) {
    SMPLFY_Log::error('[PDF Template] $form_data is missing or malformed');

    return;
}

// Declare global variable
global $variables_sales;
$variables_sales = [];

$variables_sales['form_id']                           = $form_data['form_id'] ?? '';
$variables_sales['entry_id']                          = $form_data['entry_id'] ?? '';
$variables_sales['organization_name']                 = $form_data['field'][3] ?? '';
$variables_sales['sales_funnel_stages']               = $form_data['field'][18] ?? '';
$variables_sales['lead_qualification_criteria']       = $form_data['field'][19] ?? '';
$variables_sales['sales_channels']                    = $form_data['field'][25] ?? '';
$variables_sales['sales_pitch']                       = $form_data['field'][27] ?? '';
$variables_sales['sales_team_structure']              = $form_data['field'][20] ?? '';
$variables_sales['sales_goals']                       = $form_data['field'][26] ?? '';
$variables_sales['sales_training_plan']               = $form_data['field'][21] ?? '';
$variables_sales['process_for_overcoming_objections'] = $form_data['field'][23] ?? '';
$variables_sales['sales_metrics']                     = $form_data['field'][24] ?? '';


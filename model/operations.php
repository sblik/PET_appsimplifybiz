<?php
/**
 * SECTION: Get all model from parent  forms
 */

use SmplfyCore\SMPLFY_Log;

SMPLFY_Log::info('/model/operations.php');


// Fallback for testing or unexpected use
if (empty($form_data) || !is_array($form_data) || !isset($form_data['field'])) {
    SMPLFY_Log::error('[PDF Template] $form_data is missing or malformed');

    return;
}

// Declare global variable
global $variables_operations;
$variables_operations = [];

$variables_operations['form_id']                        = $form_data['form_id'] ?? '';
$variables_operations['entry_id']                       = $form_data['entry_id'] ?? '';
$variables_operations['organization_name']              = $form_data['field'][3] ?? '';
$variables_operations['workflow_description']           = $form_data['field'][4] ?? '';
$variables_operations['key_activities_dependencies']    = $form_data['field'][5] ?? [];
$variables_operations['required_resources']             = $form_data['field'][15] ?? [];
$variables_operations['inventory_management_protocols'] = $form_data['field'][16] ?? [];
$variables_operations['quality_standards']              = $form_data['field'][17] ?? '';
$variables_operations['quality_control_methods']        = $form_data['field'][7] ?? '';
$variables_operations['standard_operating_procedures']  = $form_data['field'][8] ?? '';
$variables_operations['troubleshooting_guide']          = $form_data['field'][9] ?? '';
$variables_operations['performance_metrics']            = $form_data['field'][10] ?? '';
$variables_operations['monitoring_tools']               = $form_data['field'][18] ?? '';
$variables_operations['scalability_steps']              = $form_data['field'][20] ?? '';
$variables_operations['automation_outsourcing_plan']    = $form_data['field'][19] ?? '';
$variables_operations['operational_risks']              = $form_data['field'][21] ?? '';
$variables_operations['contingency_plans']              = $form_data['field'][22] ?? '';

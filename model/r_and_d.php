<?php
/**
 * SECTION: Get all model from parent  forms
 */

use SmplfyCore\SMPLFY_Log;

SMPLFY_Log::info('/model/r_and_d.php');


// Fallback for testing or unexpected use
if (empty($form_data) || !is_array($form_data) || !isset($form_data['field'])) {
    SMPLFY_Log::error('[PDF Template] $form_data is missing or malformed');

    return;
}

// Declare global variable
global $variables_r_and_d;
$variables_r_and_d = [];

$variables_r_and_d['form_id']                  = $form_data['form_id'] ?? '';
$variables_r_and_d['entry_id']                 = $form_data['entry_id'] ?? '';
$variables_r_and_d['organization_name']        = $form_data['field'][3] ?? '';
$variables_r_and_d['idea_collection_channels'] = $form_data['field'][4] ?? '';
$variables_r_and_d['idea_evaluation_criteria'] = $form_data['field'][6] ?? '';
$variables_r_and_d['prototype_development']    = $form_data['field'][8] ?? '';
$variables_r_and_d['customer_testing_plan']    = $form_data['field'][9] ?? '';
$variables_r_and_d['r_and_d_team_budget']      = $form_data['field'][10] ?? '';
$variables_r_and_d['feedback_integration']     = $form_data['field'][17] ?? '';
$variables_r_and_d['iteration_plan']           = $form_data['field'][18] ?? '';
$variables_r_and_d['implementation_roadmap']   = $form_data['field'][19] ?? '';
$variables_r_and_d['patentable_innovations']   = $form_data['field'][21] ?? '';
$variables_r_and_d['ip_documentation']         = $form_data['field'][22] ?? '';

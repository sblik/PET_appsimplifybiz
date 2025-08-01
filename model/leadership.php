<?php
/**
 * SECTION: Get all model from parent  forms
 */

use SmplfyCore\SMPLFY_Log;

SMPLFY_Log::info('/model/leadership.php');


// Fallback for testing or unexpected use
if (empty($form_data) || !is_array($form_data) || !isset($form_data['field'])) {
    SMPLFY_Log::error('[PDF Template] $form_data is missing or malformed');

    return;
}

// Declare global variable
global $variables_leadership;
$variables_leadership = [];

$variables_leadership['form_id']                     = $form_data['form_id'] ?? '';
$variables_leadership['entry_id']                    = $form_data['entry_id'] ?? '';
$variables_leadership['organization_name']           = $form_data['field'][3] ?? '';
$variables_leadership['strategy_review_schedule']    = $form_data['field'][4] ?? '';
$variables_leadership['decision_making_framework']   = $form_data['field'][5] ?? [];
$variables_leadership['decision_tools']              = $form_data['field'][6] ?? [];
$variables_leadership['delegation_plan']             = $form_data['field'][7] ?? [];
$variables_leadership['expectation_setting']         = $form_data['field'][8] ?? '';
$variables_leadership['communication_channels']      = $form_data['field'][9] ?? '';
$variables_leadership['leadership_training']         = $form_data['field'][10] ?? '';
$variables_leadership['coaching_programs']           = $form_data['field'][17] ?? '';
$variables_leadership['leadership_kpis']             = $form_data['field'][18] ?? '';
$variables_leadership['feedback_mechanism']          = $form_data['field'][19] ?? '';
$variables_leadership['change_management_framework'] = $form_data['field'][20] ?? '';
$variables_leadership['change_communication_plan']   = $form_data['field'][21] ?? '';

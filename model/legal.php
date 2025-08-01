<?php
/**
 * SECTION: Get all model from parent  forms
 */

use SmplfyCore\SMPLFY_Log;

SMPLFY_Log::info('/model/legal.php');


// Fallback for testing or unexpected use
if (empty($form_data) || !is_array($form_data) || !isset($form_data['field'])) {
    SMPLFY_Log::error('[PDF Template] $form_data is missing or malformed');

    return;
}

// Declare global variable
global $variables_legal;
$variables_legal = [];

$variables_legal['form_id']                        = $form_data['form_id'] ?? '';
$variables_legal['entry_id']                       = $form_data['entry_id'] ?? '';
$variables_legal['organization_name']              = $form_data['field'][3] ?? '';
$variables_legal['business_structure']             = $form_data['field'][6] ?? '';
$variables_legal['business_registrations']         = $form_data['field'][11] ?? '';
$variables_legal['compliance_requirements']        = $form_data['field'][12] ?? '';
$variables_legal['compliance_monitoring']          = $form_data['field'][13] ?? '';
$variables_legal['contract_templates']             = $form_data['field'][14] ?? '';
$variables_legal['contract_review_process']        = $form_data['field'][15] ?? '';
$variables_legal['intellectual_property_strategy'] = $form_data['field'][17] ?? '';
$variables_legal['ip_registration_plan']           = $form_data['field'][18] ?? '';
$variables_legal['data_privacy_policies']          = $form_data['field'][19] ?? '';
$variables_legal['employee_legal_agreements']      = $form_data['field'][20] ?? '';
$variables_legal['risk_assessment']                = $form_data['field'][21] ?? '';
$variables_legal['risk_mitigation_plan']           = $form_data['field'][22] ?? '';
$variables_legal['dispute_resolution_process']     = $form_data['field'][23] ?? '';

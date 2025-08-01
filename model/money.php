<?php
/**
 * SECTION: Get all model from parent  forms
 */

use SmplfyCore\SMPLFY_Log;

SMPLFY_Log::info('/model/money.php');


// Fallback for testing or unexpected use
if (empty($form_data) || !is_array($form_data) || !isset($form_data['field'])) {
    SMPLFY_Log::error('[PDF Template] $form_data is missing or malformed');

    return;
}

// Declare global variable
global $variables_money;
$variables_money = [];

$variables_money['form_id']                     = $form_data['form_id'] ?? '';
$variables_money['entry_id']                    = $form_data['entry_id'] ?? '';
$variables_money['organization_name']           = $form_data['field'][3] ?? '';
$variables_money['revenue_tracking_system']     = $form_data['field'][4] ?? '';
$variables_money['revenue_monitoring_tools']    = $form_data['field'][21] ?? [];
$variables_money['expense_categories']          = $form_data['field'][5] ?? [];
$variables_money['expense_approval_workflow']   = $form_data['field'][6] ?? '';
$variables_money['cost_saving_strategies']      = $form_data['field'][7] ?? '';
$variables_money['cash_reserve_plan']           = $form_data['field'][8] ?? '';
$variables_money['financial_reports']           = $form_data['field'][9] ?? '';
$variables_money['stakeholder_reporting']       = $form_data['field'][10] ?? '';
$variables_money['compliance_requirements']     = $form_data['field'][15] ?? '';
$variables_money['performance_review_schedule'] = $form_data['field'][23] ?? '';
$variables_money['audit_schedule']              = $form_data['field'][24] ?? '';
$variables_money['reinvestment_criteria']       = $form_data['field'][25] ?? '';
$variables_money['funding_options']             = $form_data['field'][26] ?? '';
$variables_money['annual_budget']               = $form_data['field'][19] ?? '';
$variables_money['departmental_budget']         = $form_data['field'][20] ?? '';

<?php
/**
 * SECTION: Get all model from parent  forms
 */

use SmplfyCore\SMPLFY_Log;

SMPLFY_Log::info('/model/people.php');


// Fallback for testing or unexpected use
if (empty($form_data) || !is_array($form_data) || !isset($form_data['field'])) {
    SMPLFY_Log::error('[PDF Template] $form_data is missing or malformed');

    return;
}

// Declare global variable
global $variables_people;
$variables_people = [];

$variables_people['form_id']                      = $form_data['form_id'] ?? '';
$variables_people['entry_id']                     = $form_data['entry_id'] ?? '';
$variables_people['organization_name']            = $form_data['field'][3] ?? '';
$variables_people['jobs_roles_skills']            = $form_data['field'][4] ?? '';
$variables_people['recruitment_channels']         = $form_data['field'][5] ?? [];
$variables_people['hiring_process']               = $form_data['field'][6] ?? [];
$variables_people['onboarding_plan']              = $form_data['field'][7] ?? '';
$variables_people['onboarding_training']          = $form_data['field'][8] ?? '';
$variables_people['training_programs']            = $form_data['field'][9] ?? '';
$variables_people['mentorship_programs']          = $form_data['field'][10] ?? '';
$variables_people['performance_goals']            = $form_data['field'][15] ?? '';
$variables_people['performance_review_schedule']  = $form_data['field'][16] ?? '';
$variables_people['compensation_packages']        = $form_data['field'][17] ?? '';
$variables_people['retention_initiatives']        = $form_data['field'][18] ?? '';
$variables_people['succession_plan']              = $form_data['field'][19] ?? '';
$variables_people['leadership_development_plans'] = $form_data['field'][20] ?? '';
$variables_people['employee_management_methods']  = $form_data['field'][21] ?? '';
$variables_people['feedback_action_plan']         = $form_data['field'][22] ?? '';

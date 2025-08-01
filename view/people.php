<?php

use SmplfyCore\SMPLFY_Log;

SMPLFY_Log::info('/view/people.php');

// Declare global variable
global $variables_people;

SMPLFY_Log::info('$variables_people', $variables_people);
?>

    <h1>People for <?php echo $variables_people['organization_name'] ?? 'Organization'; ?></h1>

    <!-- Leadership -->
<?php if (!empty($variables_people) && is_array($variables_people)): ?>
    <!--Jobs Roles and Skills-->
    <?php if (!empty($variables_people['jobs_roles_skills'])): ?>
        <h2 class="heading_dark_background">Jobs Roles and Skills</h2>
        <p><?php echo $variables_people['jobs_roles_skills']; ?></p>
    <?php endif; ?>
    <!--Recruitment Channels-->
    <?php if (!empty($variables_people['recruitment_channels'])): ?>
        <h2 class="heading_dark_background">Recruitment Channels</h2>
        <p><?php echo $variables_people['recruitment_channels']; ?></p>
    <?php endif; ?>
    <!--Hiring Process-->
    <?php if (!empty($variables_people['hiring_process'])): ?>
        <h2 class="heading_dark_background">Hiring Process</h2>
        <p><?php echo $variables_people['hiring_process']; ?></p>
    <?php endif; ?>
    <!--Onboarding Plan-->
    <?php if (!empty($variables_people['onboarding_plan'])): ?>
        <h2 class="heading_dark_background">Onboarding Plan</h2>
        <p><?php echo $variables_people['onboarding_plan']; ?></p>
    <?php endif; ?>
    <!--Onboarding Training-->
    <?php if (!empty($variables_people['onboarding_training'])): ?>
        <h2 class="heading_dark_background">Onboarding Training</h2>
        <p><?php echo $variables_people['onboarding_training']; ?></p>
    <?php endif; ?>
    <!--Training Programs-->
    <?php if (!empty($variables_people['training_programs'])): ?>
        <h2 class="heading_dark_background">Training Programs</h2>
        <p><?php echo $variables_people['training_programs']; ?></p>
    <?php endif; ?>
    <!--Mentorship Programs-->
    <?php if (!empty($variables_people['mentorship_programs'])): ?>
        <h2 class="heading_dark_background">Mentorship Programs</h2>
        <p><?php echo $variables_people['mentorship_programs']; ?></p>
    <?php endif; ?>
    <!--Performance Goals-->
    <?php if (!empty($variables_people['performance_goals'])): ?>
        <h2 class="heading_dark_background">Performance Goals</h2>
        <p><?php echo $variables_people['performance_goals']; ?></p>
    <?php endif; ?>
    <!--Performance Review Schedule-->
    <?php if (!empty($variables_people['performance_review_schedule'])): ?>
        <h2 class="heading_dark_background">Performance Review Schedule</h2>
        <p><?php echo $variables_people['performance_review_schedule']; ?></p>
    <?php endif; ?>
    <!--Monitoring Tools-->
    <?php if (!empty($variables_people['compensation_packages'])): ?>
        <h2 class="heading_dark_background">Compensation Packages</h2>
        <p><?php echo $variables_people['compensation_packages']; ?></p>
    <?php endif; ?>
    <!--Scalability Steps-->
    <?php if (!empty($variables_people['retention_initiatives'])): ?>
        <h2 class="heading_dark_background">Retention Initiatives</h2>
        <p><?php echo $variables_people['retention_initiatives']; ?></p>
    <?php endif; ?>
    <!--Succession Plan-->
    <?php if (!empty($variables_people['succession_plan'])): ?>
        <h2 class="heading_dark_background">Succession Plan</h2>
        <p><?php echo $variables_people['succession_plan']; ?></p>
    <?php endif; ?>
    <!--Contingency Plans-->
    <?php if (!empty($variables_people['leadership_development_plans'])): ?>
        <h2 class="heading_dark_background">Leadership Development Plans</h2>
        <p><?php echo $variables_people['leadership_development_plans']; ?></p>
    <?php endif; ?>
    <?php if (!empty($variables_people['employee_management_methods'])): ?>
        <h2 class="heading_dark_background">Employee Management Methods</h2>
        <p><?php echo $variables_people['employee_management_methods']; ?></p>
    <?php endif; ?>
    <?php if (!empty($variables_people['feedback_action_plan'])): ?>
        <h2 class="heading_dark_background">Feedback Action Plan</h2>
        <p><?php echo $variables_people['feedback_action_plan']; ?></p>
    <?php endif; ?>
<?php endif; ?>
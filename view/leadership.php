<?php

use SmplfyCore\SMPLFY_Log;

SMPLFY_Log::info('/view/leadership.php');

// Declare global variable
global $variables_leadership;

SMPLFY_Log::info('$variables_leadership', $variables_leadership);
?>

    <h1>Leadership for <?php echo $variables_leadership['organization_name'] ?? 'Organization'; ?></h1>

    <!-- Leadership -->
<?php if (!empty($variables_leadership) && is_array($variables_leadership)): ?>
    <!--Strategy Review Schedule-->
    <?php if (!empty($variables_leadership['strategy_review_schedule'])): ?>
        <h2 class="heading_dark_background">Strategy Review Schedule</h2>
        <p><?php echo $variables_leadership['strategy_review_schedule']; ?></p>
    <?php endif; ?>
    <!--DecisionMaking Framework-->
    <?php if (!empty($variables_leadership['decision_making_framework'])): ?>
        <h2 class="heading_dark_background">Decision-Making Framework</h2>
        <p><?php echo $variables_leadership['decision_making_framework']; ?></p>
    <?php endif; ?>
    <!--Decision Tools-->
    <?php if (!empty($variables_leadership['decision_tools'])): ?>
        <h2 class="heading_dark_background">Decision Tools</h2>
        <p><?php echo $variables_leadership['decision_tools']; ?></p>
    <?php endif; ?>
    <!--Delegation Plan-->
    <?php if (!empty($variables_leadership['delegation_plan'])): ?>
        <h2 class="heading_dark_background">Delegation Plan</h2>
        <p><?php echo $variables_leadership['delegation_plan']; ?></p>
    <?php endif; ?>
    <!--Expectation Setting-->
    <?php if (!empty($variables_leadership['expectation_setting'])): ?>
        <h2 class="heading_dark_background">Expectation Setting</h2>
        <p><?php echo $variables_leadership['expectation_setting']; ?></p>
    <?php endif; ?>
    <!--Communication Channels-->
    <?php if (!empty($variables_leadership['communication_channels'])): ?>
        <h2 class="heading_dark_background">Communication Channels</h2>
        <p><?php echo $variables_leadership['communication_channels']; ?></p>
    <?php endif; ?>
    <!--Leadership Training-->
    <?php if (!empty($variables_leadership['leadership_training'])): ?>
        <h2 class="heading_dark_background">Leadership Training</h2>
        <p><?php echo $variables_leadership['leadership_training']; ?></p>
    <?php endif; ?>
    <!--Coaching Programs-->
    <?php if (!empty($variables_leadership['coaching_programs'])): ?>
        <h2 class="heading_dark_background">Coaching Programs</h2>
        <p><?php echo $variables_leadership['coaching_programs']; ?></p>
    <?php endif; ?>
    <!--Leadership KPIs-->
    <?php if (!empty($variables_leadership['leadership_kpis'])): ?>
        <h2 class="heading_dark_background">Leadership KPIs</h2>
        <p><?php echo $variables_leadership['leadership_kpis']; ?></p>
    <?php endif; ?>
    <!--Feedback Mechanism-->
    <?php if (!empty($variables_leadership['feedback_mechanism'])): ?>
        <h2 class="heading_dark_background">Feedback Mechanism</h2>
        <p><?php echo $variables_leadership['feedback_mechanism']; ?></p>
    <?php endif; ?>
    <!--Change Management Framework-->
    <?php if (!empty($variables_leadership['change_management_framework'])): ?>
        <h2 class="heading_dark_background">Change Management Framework</h2>
        <p><?php echo $variables_leadership['change_management_framework']; ?></p>
    <?php endif; ?>
    <!--Change Communication Plan-->
    <?php if (!empty($variables_leadership['change_communication_plan'])): ?>
        <h2 class="heading_dark_background">Change Communication Plan</h2>
        <p><?php echo $variables_leadership['change_communication_plan']; ?></p>
    <?php endif; ?>


<?php endif; ?>
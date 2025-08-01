<?php

use SmplfyCore\SMPLFY_Log;

SMPLFY_Log::info('/view/sales.php');

// Declare global variable
global $variables_sales;

SMPLFY_Log::info('$variables_sales', $variables_sales);
?>

    <h1>Sales for <?php echo $variables_sales['organization_name'] ?? 'Organization'; ?></h1>

    <!-- Leadership -->
<?php if (!empty($variables_sales) && is_array($variables_sales)): ?>
    <!--Jobs Roles and Skills-->
    <?php if (!empty($variables_sales['sales_funnel_stages'])): ?>
        <h2 class="heading_dark_background">Sales Funnel Stages</h2>
        <p><?php echo $variables_sales['sales_funnel_stages']; ?></p>
    <?php endif; ?>
    <!--Recruitment Channels-->
    <?php if (!empty($variables_sales['lead_qualification_criteria'])): ?>
        <h2 class="heading_dark_background">Lead Qualification Criteria</h2>
        <p><?php echo $variables_sales['lead_qualification_criteria']; ?></p>
    <?php endif; ?>
    <!--Hiring Process-->
    <?php if (!empty($variables_sales['sales_channels'])): ?>
        <h2 class="heading_dark_background">Sales Channels</h2>
        <p><?php echo $variables_sales['sales_channels']; ?></p>
    <?php endif; ?>
    <!--Inventory Management Protocols-->
    <?php if (!empty($variables_sales['sales_pitch'])): ?>
        <h2 class="heading_dark_background">Sales Pitch</h2>
        <p><?php echo $variables_sales['sales_pitch']; ?></p>
    <?php endif; ?>
    <!--Onboarding Training-->
    <?php if (!empty($variables_sales['sales_team_structure'])): ?>
        <h2 class="heading_dark_background">Sales Team Structure</h2>
        <p><?php echo $variables_sales['sales_team_structure']; ?></p>
    <?php endif; ?>
    <!--Training Programs-->
    <?php if (!empty($variables_sales['sales_goals'])): ?>
        <h2 class="heading_dark_background">Sales Goals</h2>
        <p><?php echo $variables_sales['sales_goals']; ?></p>
    <?php endif; ?>
    <!--Mentorship Programs-->
    <?php if (!empty($variables_sales['sales_training_plan'])): ?>
        <h2 class="heading_dark_background">Sales Training Plan</h2>
        <p><?php echo $variables_sales['sales_training_plan']; ?></p>
    <?php endif; ?>
    <!--Performance Goals-->
    <?php if (!empty($variables_sales['process_for_overcoming_objections'])): ?>
        <h2 class="heading_dark_background">Process For Overcoming Objections</h2>
        <p><?php echo $variables_sales['process_for_overcoming_objections']; ?></p>
    <?php endif; ?>
    <!--Performance Review Schedule-->
    <?php if (!empty($variables_sales['sales_metrics'])): ?>
        <h2 class="heading_dark_background">Sales Metrics</h2>
        <p><?php echo $variables_sales['sales_metrics']; ?></p>
    <?php endif; ?>
<?php endif; ?>
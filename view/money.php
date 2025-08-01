<?php

use SmplfyCore\SMPLFY_Log;

SMPLFY_Log::info('/view/money.php');

// Declare global variable
global $variables_money;

SMPLFY_Log::info('$variables_money', $variables_money);
?>

    <h1>Money for <?php echo $variables_money['organization_name'] ?? 'Organization'; ?></h1>

    <!-- Money -->
<?php if (!empty($variables_money) && is_array($variables_money)): ?>
    <!--Revenue Tracking System-->
    <?php if (!empty($variables_money['revenue_tracking_system'])): ?>
        <h2 class="heading_dark_background">Revenue Tracking System</h2>
        <p><?php echo $variables_money['revenue_tracking_system']; ?></p>
    <?php endif; ?>
    <!--Revenue Monitoring Tools-->
    <?php if (!empty($variables_money['revenue_monitoring_tools'])): ?>
        <h2 class="heading_dark_background">Revenue Monitoring Tools</h2>
        <p><?php echo $variables_money['revenue_monitoring_tools']; ?></p>
    <?php endif; ?>
    <!--Expense Categories-->
    <?php if (!empty($variables_money['expense_categories'])): ?>
        <h2 class="heading_dark_background">Expense Categories</h2>
        <p><?php echo $variables_money['expense_categories']; ?></p>
    <?php endif; ?>
    <!--Expense Approval Workflow-->
    <?php if (!empty($variables_money['expense_approval_workflow'])): ?>
        <h2 class="heading_dark_background">Expense Approval Workflow</h2>
        <p><?php echo $variables_money['expense_approval_workflow']; ?></p>
    <?php endif; ?>
    <!--Cost Saving Strategies-->
    <?php if (!empty($variables_money['cost_saving_strategies'])): ?>
        <h2 class="heading_dark_background">Cost Saving Strategies</h2>
        <p><?php echo $variables_money['cost_saving_strategies']; ?></p>
    <?php endif; ?>
    <!--Cash Reserve Plan-->
    <?php if (!empty($variables_money['cash_reserve_plan'])): ?>
        <h2 class="heading_dark_background">Cash Reserve Plan</h2>
        <p><?php echo $variables_money['cash_reserve_plan']; ?></p>
    <?php endif; ?>
    <!--Financial Reports-->
    <?php if (!empty($variables_money['financial_reports'])): ?>
        <h2 class="heading_dark_background">Financial Reports</h2>
        <p><?php echo $variables_money['financial_reports']; ?></p>
    <?php endif; ?>
    <!--Stakeholder Reporting-->
    <?php if (!empty($variables_money['stakeholder_reporting'])): ?>
        <h2 class="heading_dark_background">Stakeholder Reporting</h2>
        <p><?php echo $variables_money['stakeholder_reporting']; ?></p>
    <?php endif; ?>
    <!--Performance Review Schedule-->
    <?php if (!empty($variables_money['compliance_requirements'])): ?>
        <h2 class="heading_dark_background">Compliance Requirements</h2>
        <p><?php echo $variables_money['compliance_requirements']; ?></p>
    <?php endif; ?>
    <!--Performance Review Schedule-->
    <?php if (!empty($variables_money['performance_review_schedule'])): ?>
        <h2 class="heading_dark_background">Performance Review Schedule</h2>
        <p><?php echo $variables_money['performance_review_schedule']; ?></p>
    <?php endif; ?>
    <!--Audit Schedule-->
    <?php if (!empty($variables_money['audit_schedule'])): ?>
        <h2 class="heading_dark_background">Audit Schedule</h2>
        <p><?php echo $variables_money['audit_schedule']; ?></p>
    <?php endif; ?>
    <!--Succession Plan-->
    <?php if (!empty($variables_money['reinvestment_criteria'])): ?>
        <h2 class="heading_dark_background">Reinvestment Criteria</h2>
        <p><?php echo $variables_money['reinvestment_criteria']; ?></p>
    <?php endif; ?>
    <!--Contingency Plans-->
    <?php if (!empty($variables_money['funding_options'])): ?>
        <h2 class="heading_dark_background">Funding Options</h2>
        <p><?php echo $variables_money['funding_options']; ?></p>
    <?php endif; ?>
    <?php if (!empty($variables_money['annual_budget'])): ?>
        <h2 class="heading_dark_background">Annual Budget</h2>
        <p><?php echo $variables_money['annual_budget']; ?></p>
    <?php endif; ?>
    <?php if (!empty($variables_money['departmental_budget'])): ?>
        <h2 class="heading_dark_background">Departmental Budget</h2>
        <p><?php echo $variables_money['departmental_budget']; ?></p>
    <?php endif; ?>
<?php endif; ?>
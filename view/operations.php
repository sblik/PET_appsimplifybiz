<?php

use SmplfyCore\SMPLFY_Log;

SMPLFY_Log::info('/view/operations.php');

// Declare global variable
global $variables_operations;

SMPLFY_Log::info('$variables_operations', $variables_operations);
?>

    <h1>Operations for <?php echo $variables_operations['organization_name'] ?? 'Organization'; ?></h1>

    <!-- Leadership -->
<?php if (!empty($variables_operations) && is_array($variables_operations)): ?>
    <!--Workflow Description-->
    <?php if (!empty($variables_operations['workflow_description'])): ?>
        <h2 class="heading_dark_background">Workflow Description</h2>
        <p><?php echo $variables_operations['workflow_description']; ?></p>
    <?php endif; ?>
    <!--Key Activities and Dependencies-->
    <?php if (!empty($variables_operations['key_activities_dependencies'])): ?>
        <h2 class="heading_dark_background">Key Activities and Dependencies</h2>
        <p><?php echo $variables_operations['key_activities_dependencies']; ?></p>
    <?php endif; ?>
    <!--Required Resources-->
    <?php if (!empty($variables_operations['required_resources'])): ?>
        <h2 class="heading_dark_background">Required Resources</h2>
        <p><?php echo $variables_operations['required_resources']; ?></p>
    <?php endif; ?>
    <!--Inventory Management Protocols-->
    <?php if (!empty($variables_operations['inventory_management_protocols'])): ?>
        <h2 class="heading_dark_background">Inventory Management Protocols</h2>
        <p><?php echo $variables_operations['inventory_management_protocols']; ?></p>
    <?php endif; ?>
    <!--Quality Standards-->
    <?php if (!empty($variables_operations['quality_standards'])): ?>
        <h2 class="heading_dark_background">Quality Standards</h2>
        <p><?php echo $variables_operations['quality_standards']; ?></p>
    <?php endif; ?>
    <!--Quality Control Methods-->
    <?php if (!empty($variables_operations['quality_control_methods'])): ?>
        <h2 class="heading_dark_background">Quality Control Methods</h2>
        <p><?php echo $variables_operations['quality_control_methods']; ?></p>
    <?php endif; ?>
    <!--Standard Operating Procedures-->
    <?php if (!empty($variables_operations['standard_operating_procedures'])): ?>
        <h2 class="heading_dark_background">Standard Operating Procedures</h2>
        <p><?php echo $variables_operations['standard_operating_procedures']; ?></p>
    <?php endif; ?>
    <!--Troubleshooting Guide-->
    <?php if (!empty($variables_operations['troubleshooting_guide'])): ?>
        <h2 class="heading_dark_background">Troubleshooting Guide</h2>
        <p><?php echo $variables_operations['troubleshooting_guide']; ?></p>
    <?php endif; ?>
    <!--Performance Metrics-->
    <?php if (!empty($variables_operations['performance_metrics'])): ?>
        <h2 class="heading_dark_background">Performance Metrics</h2>
        <p><?php echo $variables_operations['performance_metrics']; ?></p>
    <?php endif; ?>
    <!--Monitoring Tools-->
    <?php if (!empty($variables_operations['monitoring_tools'])): ?>
        <h2 class="heading_dark_background">Monitoring Tools</h2>
        <p><?php echo $variables_operations['monitoring_tools']; ?></p>
    <?php endif; ?>
    <!--Scalability Steps-->
    <?php if (!empty($variables_operations['scalability_steps'])): ?>
        <h2 class="heading_dark_background">Scalability Steps</h2>
        <p><?php echo $variables_operations['scalability_steps']; ?></p>
    <?php endif; ?>
    <!--Automation/Outsourcing Plan-->
    <?php if (!empty($variables_operations['automation_outsourcing_plan'])): ?>
        <h2 class="heading_dark_background">Automation/Outsourcing Plan</h2>
        <p><?php echo $variables_operations['automation_outsourcing_plan']; ?></p>
    <?php endif; ?>
    <!--Operational Risks-->
    <?php if (!empty($variables_operations['operational_risks'])): ?>
        <h2 class="heading_dark_background">Operational Risks</h2>
        <p><?php echo $variables_operations['operational_risks']; ?></p>
    <?php endif; ?>
    <!--Contingency Plans-->
    <?php if (!empty($variables_operations['contingency_plans'])): ?>
        <h2 class="heading_dark_background">Contingency Plans</h2>
        <p><?php echo $variables_operations['contingency_plans']; ?></p>
    <?php endif; ?>
<?php endif; ?>
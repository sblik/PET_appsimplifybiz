<?php

use SmplfyCore\SMPLFY_Log;

SMPLFY_Log::info('/view/legal.php');

// Declare global variable
global $variables_legal;

SMPLFY_Log::info('$variables_legal', $variables_legal);
?>

    <h1>Legal for <?php echo $variables_legal['organization_name'] ?? 'Organization'; ?></h1>

    <!-- Money -->
<?php if (!empty($variables_legal) && is_array($variables_legal)): ?>
    <!--Business Structure-->
    <?php if (!empty($variables_legal['business_structure'])): ?>
        <h2 class="heading_dark_background">Business Structure</h2>
        <p><?php echo $variables_legal['business_structure']; ?></p>
    <?php endif; ?>
    <!--Business Registrations-->
    <?php if (!empty($variables_legal['business_registrations'])): ?>
        <h2 class="heading_dark_background">Business Registrations</h2>
        <p><?php echo $variables_legal['business_registrations']; ?></p>
    <?php endif; ?>
    <!--Compliance Requirements-->
    <?php if (!empty($variables_legal['compliance_requirements'])): ?>
        <h2 class="heading_dark_background">Compliance Requirements</h2>
        <p><?php echo $variables_legal['compliance_requirements']; ?></p>
    <?php endif; ?>
    <!--Compliance Monitoring-->
    <?php if (!empty($variables_legal['compliance_monitoring'])): ?>
        <h2 class="heading_dark_background">Compliance Monitoring</h2>
        <p><?php echo $variables_legal['compliance_monitoring']; ?></p>
    <?php endif; ?>
    <!--Contract Templates-->
    <?php if (!empty($variables_legal['contract_templates'])): ?>
        <h2 class="heading_dark_background">Contract Templates</h2>
        <p><?php echo $variables_legal['contract_templates']; ?></p>
    <?php endif; ?>
    <!--Contract Review Process-->
    <?php if (!empty($variables_legal['contract_review_process'])): ?>
        <h2 class="heading_dark_background">Contract Review Process</h2>
        <p><?php echo $variables_legal['contract_review_process']; ?></p>
    <?php endif; ?>
    <!--Intellectual Property Strategy-->
    <?php if (!empty($variables_legal['intellectual_property_strategy'])): ?>
        <h2 class="heading_dark_background">Intellectual Property Strategy</h2>
        <p><?php echo $variables_legal['intellectual_property_strategy']; ?></p>
    <?php endif; ?>
    <!--IP Registration Plan-->
    <?php if (!empty($variables_legal['ip_registration_plan'])): ?>
        <h2 class="heading_dark_background">IP Registration Plan</h2>
        <p><?php echo $variables_legal['ip_registration_plan']; ?></p>
    <?php endif; ?>
    <!--Data Privacy Policies-->
    <?php if (!empty($variables_legal['data_privacy_policies'])): ?>
        <h2 class="heading_dark_background">Data Privacy Policies</h2>
        <p><?php echo $variables_legal['data_privacy_policies']; ?></p>
    <?php endif; ?>
    <!--Employee Legal Agreements-->
    <?php if (!empty($variables_legal['employee_legal_agreements'])): ?>
        <h2 class="heading_dark_background">Employee Legal Agreements</h2>
        <p><?php echo $variables_legal['employee_legal_agreements']; ?></p>
    <?php endif; ?>
    <!--Risk Assessment-->
    <?php if (!empty($variables_legal['risk_assessment'])): ?>
        <h2 class="heading_dark_background">Risk Assessment</h2>
        <p><?php echo $variables_legal['risk_assessment']; ?></p>
    <?php endif; ?>
    <!--Risk Mitigation Plan-->
    <?php if (!empty($variables_legal['risk_mitigation_plan'])): ?>
        <h2 class="heading_dark_background">Risk Mitigation Plan</h2>
        <p><?php echo $variables_legal['risk_mitigation_plan']; ?></p>
    <?php endif; ?>
    <!--IP Documentation-->
    <?php if (!empty($variables_legal['dispute_resolution_process'])): ?>
        <h2 class="heading_dark_background">Dispute Resolution Process</h2>
        <p><?php echo $variables_legal['dispute_resolution_process']; ?></p>
    <?php endif; ?>
<?php endif; ?>
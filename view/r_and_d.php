<?php

use SmplfyCore\SMPLFY_Log;

SMPLFY_Log::info('/view/r_and_d.php');

// Declare global variable
global $variables_r_and_d;

SMPLFY_Log::info('$variables_r_and_d', $variables_r_and_d);
?>

    <h1>Research and Development for <?php echo $variables_r_and_d['organization_name'] ?? 'Organization'; ?></h1>

    <!-- Money -->
<?php if (!empty($variables_r_and_d) && is_array($variables_r_and_d)): ?>
    <!--Idea Collection Channels-->
    <?php if (!empty($variables_r_and_d['idea_collection_channels'])): ?>
        <h2 class="heading_dark_background">Idea Collection Channels</h2>
        <p><?php echo $variables_r_and_d['idea_collection_channels']; ?></p>
    <?php endif; ?>
    <!--Idea Evaluation Criteria-->
    <?php if (!empty($variables_r_and_d['idea_evaluation_criteria'])): ?>
        <h2 class="heading_dark_background">Idea Evaluation Criteria</h2>
        <p><?php echo $variables_r_and_d['idea_evaluation_criteria']; ?></p>
    <?php endif; ?>
    <!--Prototype Development-->
    <?php if (!empty($variables_r_and_d['prototype_development'])): ?>
        <h2 class="heading_dark_background">Prototype Development</h2>
        <p><?php echo $variables_r_and_d['prototype_development']; ?></p>
    <?php endif; ?>
    <!--Customer Testing Plan-->
    <?php if (!empty($variables_r_and_d['customer_testing_plan'])): ?>
        <h2 class="heading_dark_background">Customer Testing Plan</h2>
        <p><?php echo $variables_r_and_d['customer_testing_plan']; ?></p>
    <?php endif; ?>
    <!--R and D Team Budget-->
    <?php if (!empty($variables_r_and_d['r_and_d_team_budget'])): ?>
        <h2 class="heading_dark_background">R and D Team Budget</h2>
        <p><?php echo $variables_r_and_d['r_and_d_team_budget']; ?></p>
    <?php endif; ?>
    <!--Feedback Integration-->
    <?php if (!empty($variables_r_and_d['feedback_integration'])): ?>
        <h2 class="heading_dark_background">Feedback Integration</h2>
        <p><?php echo $variables_r_and_d['feedback_integration']; ?></p>
    <?php endif; ?>
    <!--Iteration Plan-->
    <?php if (!empty($variables_r_and_d['iteration_plan'])): ?>
        <h2 class="heading_dark_background">Iteration Plan</h2>
        <p><?php echo $variables_r_and_d['iteration_plan']; ?></p>
    <?php endif; ?>
    <!--Implementation Roadmap-->
    <?php if (!empty($variables_r_and_d['implementation_roadmap'])): ?>
        <h2 class="heading_dark_background">Implementation Roadmap</h2>
        <p><?php echo $variables_r_and_d['implementation_roadmap']; ?></p>
    <?php endif; ?>
    <!--Patentable Innovations-->
    <?php if (!empty($variables_r_and_d['patentable_innovations'])): ?>
        <h2 class="heading_dark_background">Patentable Innovations</h2>
        <p><?php echo $variables_r_and_d['patentable_innovations']; ?></p>
    <?php endif; ?>
    <!--IP Documentation-->
    <?php if (!empty($variables_r_and_d['ip_documentation'])): ?>
        <h2 class="heading_dark_background">IP Documentation</h2>
        <p><?php echo $variables_r_and_d['ip_documentation']; ?></p>
    <?php endif; ?>
<?php endif; ?>
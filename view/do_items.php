<?php

\SmplfyCore\SMPLFY_Log::info( '/view/do_items.php' );

// Declare global variable
global $variables_do_items, $threats_entry_array, $opportunities_entry_array, $do_items_entry_array;

?>

<h1>DO ITEMS for <?php echo esc_html( $variables_do_items['organization_name'] ?? '' ); ?></h1>

<!-- Objective -->

<table class="smplfyTables" id="table_objective">
    <tr>
        <th class="bg_black">Objective</th>
    </tr>
    <tr>
        <td><?php echo( $variables_do_items['objective'] ); ?></td>
    </tr>
</table>

<!-- Action Steps -->
<table class="smplfyTables" id="table_action_step">
    <tr>
        <th class="bg_black">Action Step</th>
    </tr>
    <tr>
        <td><?php echo( $variables_do_items['action_step'] ); ?></td>
    </tr>
</table>

<!-- Threats -->
<?php if ( ! empty( $variables_do_items['nested_form_ids_threats'] ) && is_array( $variables_do_items ) ): ?>
    <table class="smplfyTables" id="table_threats">
        <tr>
            <th class="bg_black">Threats</th>
        </tr>
        <!-- Insert Repeater -->
        <tr>
            <td></td>
        </tr>
    </table>
<?php endif; ?>

<!-- Opportunities -->
<?php if ( ! empty( $variables_do_items['nested_form_ids_opportunities'] ) && is_array( $variables_do_items ) ): ?>
    <table class="smplfyTables" id="table_opportunities">
        <tr>
            <th class="bg_black">Opportunities</th>
        </tr>
        <!-- Insert Repeater -->
        <tr>
            <td></td>
        </tr>
    </table>
<?php endif; ?>

<!-- Threats -->
<?php if ( ! empty( $variables_do_items['nested_form_ids_do_items'] ) && is_array( $variables_do_items ) ): ?>
    <table class="smplfyTables" id="table_do_items">
        <tr>
            <th class="bg_black" colspan="4">Do Items</th>
        </tr>
        <tr>
            <td class="bg_yellow">Do Item</td>
            <td class="bg_red">Point Person</td>
            <td class="bg_blue">Due</td>
            <td class="bg_green">Status</td>
        </tr>
        <!-- Insert Repeater -->
		<?php if ( ! empty( $do_items_entry_array ) && is_array( $do_items_entry_array ) ): ?>
			<?php foreach ( $do_items_entry_array as $entry ): ?>
                <tr>
                    <td><?php echo esc_html( $entry['do_item'] ?? '' ); ?></td>
                    <td><?php echo esc_html( $entry['point_person'] ?? '' ); ?></td>
                    <td><?php echo esc_html( trim( ( $entry['due_date'] ?? '' ) . ' @ ' . ( $entry['due_time'] ?? '' ) ) ); ?></td>
                    <td><?php echo esc_html( $entry['status'] ?? '' ); ?></td>
                </tr>
			<?php endforeach; ?>
		<?php else: ?>
            <tr>
                <td colspan="4">No Do Items listed.</td>
            </tr>
		<?php endif; ?>
    </table>
<?php endif; ?>

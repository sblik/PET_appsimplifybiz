<?php

use SmplfyCore\SMPLFY_Log;

SMPLFY_Log::info('/view/strategy.php');

// Declare global variable
global $variables_strategy;
global $markets_entry_array;
global $objective_entry_array;

?>

<h1>STRATEGY for <?php echo esc_html($variables_strategy['organization_name'] ?? ''); ?></h1>

<!-- Purpose ------------------------------------------------------------------------------------------------ -->
<table class="smplfyTables" id="table_purpose">
    <tr>
        <th class="bg_black">Why we are in Business</th>
    </tr>
    <?php if (!empty($variables_strategy['purpose'])): ?>
        <tr>
            <td><?php echo($variables_strategy['purpose']); ?></td>
        </tr>
    <?php else: ?>
        <tr>
            <td>No purpose listed.</td>
        </tr>
    <?php endif; ?>
</table>

<!-- Target Market ------------------------------------------------------------------------------------------------ -->
<table class="smplfyTables" id="table_target_market">
    <tr>
        <th class="bg_black">Who We Serve</th>
    </tr>
    <tr>
        <td>
            <ul>
                <?php if (!empty($markets_entry_array) && is_array($markets_entry_array)): ?>
                <?php foreach ($markets_entry_array as $entry): ?>

                    <li><?php echo esc_html($entry['name'] ?? ''); ?></li>
                <?php endforeach; ?>
            </ul>
            <?php else: ?>
        </td>
    </tr>
    <tr>
        <td>No target markets listed.</td>
    </tr>
    <?php endif; ?>
</table>


<!-- Solutions ------------------------------------------------------------------------------------------------ -->
<table class="smplfyTables" id="table_solutions">
    <tr>
        <th class="bg_black">Our Solutions</th>
    </tr>
    <?php if (!empty($variables_strategy['solutions'])): ?>
        <tr>
            <td><?php echo($variables_strategy['solutions']); ?></td>
        </tr>
    <?php else: ?>
        <tr>
            <td>No solutions listed.</td>
        </tr>
    <?php endif; ?>
</table>

<!-- Budget ------------------------------------------------------------------------------------------------ -->
<table class="smplfyTables" id="table_budget">
    <tr>
        <th class="bg_black" colspan="5">Budget</th>
    </tr>
</table>

<!-- Pie Chart -->
<?php
// Example data
$data = [
    'Marketing'  => $variables_strategy['budget_marketing'],
    'Sales'      => $variables_strategy['budget_sales'],
    'Operations' => $variables_strategy['budget_operations'],
    'Admin'      => $variables_strategy['budget_admin'],
    'Profit'     => $variables_strategy['budget_profit'],
];

$colors = ['#ff9a9a', '#feff9d', '#b3b6e0', '#9be79b', '#DACFDF'];
$total  = array_sum($data);

$startAngle = 0;
$size       = 300;
$radius     = $size / 2;
$cx         = $cy = $radius;

// Start table
echo '<table style="border-collapse: collapse;">';
echo '<tr>';

// Left column: Pie Chart
echo '<td style="vertical-align: top; padding-right: 20px;">';

echo '<svg width="' . $size . '" height="' . $size . '" viewBox="0 0 ' . $size . ' ' . $size . '" xmlns="http://www.w3.org/2000/svg" style="font-family: Arial, sans-serif;">';

$i = 0;
foreach ($data as $label => $value) {
    $angle    = ($value / $total) * 360;
    $endAngle = $startAngle + $angle;

    // Arc coordinates
    $x1 = $cx + $radius * cos(deg2rad($startAngle));
    $y1 = $cy + $radius * sin(deg2rad($startAngle));
    $x2 = $cx + $radius * cos(deg2rad($endAngle));
    $y2 = $cy + $radius * sin(deg2rad($endAngle));

    // Large arc flag
    $largeArcFlag = ($angle > 180) ? 1 : 0;

    // Draw slice
    echo '<path d="M' . $cx . ',' . $cy . ' L' . $x1 . ',' . $y1 . ' A' . $radius . ',' . $radius . ' 0 ' . $largeArcFlag . ',1 ' . $x2 . ',' . $y2 . ' Z" fill="' . $colors[$i] . '" stroke="#fff" stroke-width="1"></path>';

    // Midpoint angle for label
    $midAngle = $startAngle + ($angle / 2);
    $textX    = $cx + ($radius * 0.6) * cos(deg2rad($midAngle));
    $textY    = $cy + ($radius * 0.6) * sin(deg2rad($midAngle));

    // Add value label inside slice
    echo '<text x="' . $textX . '" y="' . $textY . '" text-anchor="middle" dominant-baseline="middle" font-size="14" fill="#000">'
        . $value . '%</text>';

    $startAngle += $angle;
    $i++;
}

echo '</svg>';
echo '</td>';

// Right column: Legend
echo '<td style="vertical-align: top;">';
echo '<table style="border-collapse: collapse;">';

$i = 0;
foreach ($data as $label => $value) {
    echo '<tr>';
    echo '<td style="width: 20px; height: 20px; background-color: ' . $colors[$i] . '; border: 1px solid #000;"></td>';
    echo '<td style="padding-left: 10px; font-size: 14px;">' . $label . '</td>';
    echo '</tr>';
    $i++;
}

echo '</table>';
echo '</td>';

echo '</tr>';
echo '</table>';
?>
<!-- Accountability ------------------------------------------------------------------------------------------------ -->
<table class="smplfyTables" id="table_accountability" style="width: 100%; border-collapse: collapse;">
    <?php
    $roles                 = [
        'accountable_leadership' => 'bg_yellow',
        'accountable_marketing'  => 'bg_red',
        'accountable_sales'      => 'bg_blue',
        'accountable_operations' => 'bg_green',
        'accountable_systems'    => 'bg_purple',
    ];
    $populated_roles_count = 0;
    foreach ($roles as $role => $class) {
        if (!empty(array_filter($variables_strategy[$role] ?? [])) && is_array($variables_strategy)) {
            $populated_roles_count++;
        }
    }
    ?>
    <tr>
        <th class="bg_black"
            style="width: 100%;" <?php echo $populated_roles_count > 0 ? 'colspan="' . esc_attr($populated_roles_count) . '"' : ''; ?>>
            Accountability
        </th>
    </tr>
    <?php if ($populated_roles_count > 0): ?>
        <tr>
            <?php
            $has_content = false;
            foreach ($roles as $role => $class) {
                if (!empty(array_filter($variables_strategy[$role] ?? [])) && is_array($variables_strategy)) {
                    echo '<td class="' . esc_attr($class) . '">' . esc_html(ucfirst(str_replace('accountable_', '', $role))) . '</td>';
                    $has_content = true;
                }
            }
            ?>
        </tr>
        <tr>
            <?php
            $has_content = false;
            foreach ($roles as $role => $class) {
                if (!empty(array_filter($variables_strategy[$role] ?? [])) && is_array($variables_strategy)) {
                    $name = trim(($variables_strategy[$role]['first'] ?? '') . ' ' . ($variables_strategy[$role]['last'] ?? ''));
                    echo '<td>' . esc_html($name) . '</td>';
                    $has_content = true;
                }
            }
            ?>
        </tr>
    <?php else: ?>
        <tr>
            <td>No roles assigned.</td>
        </tr>
        <tr>
            <td>No names assigned.</td>
        </tr>
    <?php endif; ?>
</table>

<?php
// ## Get Variables from Target Markets

\SmplfyCore\SMPLFY_Log::info('/model/target_market.php');

global $variables_strategy;

// Fallback for testing or unexpected use
if (empty($form_data) || !is_array($form_data) || !isset($form_data['field'])) {
	\SmplfyCore\SMPLFY_Log::error('[PDF Template] $form_data is missing or malformed');
	return;
}

// Declare global variable
global $markets_entry_array;
$markets_entry_array = [];

$markets_form_id = 70;

// Safely retrieve and clean nested entry IDs
$raw_ids   = $variables_strategy['nested_form_ids_target_market'] ?? '';
$entry_ids = array_filter(array_map('trim', explode(',', $raw_ids)));

$markets_entry_array = [];

// Field mappings
$markets_field_id_name          = 1;
$markets_field_id_demographic   = 2;
$markets_field_id_reach         = 3;
$markets_field_id_values        = 4;
$markets_field_id_research      = 5;
$markets_field_id_opportunities = 8;

foreach ($entry_ids as $entry_id) {
	$entry = GFAPI::get_entry($entry_id);

	if (is_wp_error($entry)) {
		error_log("Target Market: Failed to get entry ID {$entry_id} - " . $entry->get_error_message());
		$markets_entry_array[] = [
			'name'        => '',
			'demographic' => '',
			'reach'       => '',
			'values'      => '',
			'research'    => '',
			'oppotunities'    => '',
			'error'       => "Entry ID {$entry_id} not found.",
		];
		continue;
	}

	$markets_entry_array[] = [
		'name'          => $entry[$markets_field_id_name] ?? '',
		'demographic'   => $entry[$markets_field_id_demographic] ?? '',
		'reach'         => $entry[$markets_field_id_reach] ?? '',
		'values'        => $entry[$markets_field_id_values] ?? '',
		'research'      => wp_strip_all_tags($entry[$markets_field_id_research] ?? ''),
		'opportunities' => $entry[$markets_field_id_opportunities] ?? '',
	];
}

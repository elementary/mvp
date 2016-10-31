<?php
/**
 * @see https://help.launchpad.net/API/Hacking
 * @see https://launchpad.net/+apidoc/beta.html#milestone-searchTasks
 */

// CONFIG STARTS HERE

// Launchpad API URL
$apiBaseUrl = 'https://api.launchpad.net/beta';

// Build a chart to now.
$timeTo = time(); // Now

// Build a chart from a date
// (Set to null to get data for the whole milestone)
// Interval for each bar in chart

// 1 year displayed as 52 weeks
//$timeFrom = time() - 365 * 24 * 60 * 60;
//$timeInterval = 7 * 24 * 60 * 60;

// 8 weeks displayed as 56 days
$timeFrom = time() - 8 * 7 * 24 * 60 * 60;
$timeInterval = 24 * 60 * 60;

// Arbitrary time period displayed as 50 points
//$timeFrom = mktime(12, 0, 0, 4, 11, 2015); // Date when Freya 0.3.0 released
//$timeFrom = mktime(12, 0, 0, 9, 9, 2016); // Date when Loki 0.4.0 released
//$timeInterval = (int) ($timeTo - $timeFrom) / 50; // We want 50 points

// CONFIG ENDS HERE

require_once __DIR__ . '/config.loader.php';
require_once __DIR__ . '/log-echo.php';

date_default_timezone_set('UTC');

header('Content-Type: text/plain');

if ( !is_writable('./chart.json') ) {
	log_echo('ERROR: File `backend/chart.json` is not writable.');
	exit(1);
}

$apiParams = 'ws.op=searchTasks';
$apiEndpoint = $apiBaseUrl.'/'.$config['chart_link_project'].'/+milestone/'.$config['chart_link_milestone'].'?'.$apiParams;

$autoDetectTimeFrom = ($timeFrom === null);
$tasks = array();

// Make HTTP requests
$nextCollectionPoint = $apiEndpoint;
while (!empty($nextCollectionPoint)) {
	echo 'Requesting tasks from '.$nextCollectionPoint;
	$json = file_get_contents($nextCollectionPoint);
	$data = json_decode($json, true);

	foreach ($data['entries'] as $task) {
		$dateCreated = strtotime($task['date_created']);

		if ($autoDetectTimeFrom && ($timeFrom === null || $dateCreated < $timeFrom)) {
			$timeFrom = $dateCreated;
		}

		$tasks[] = array(
			'status' => $task['status'],
			'date_created' => $dateCreated,
			'date_in_progress' => strtotime($task['date_in_progress']),
			'date_fixed' => !empty($task['date_fix_committed']) ? strtotime($task['date_fix_committed']) : strtotime($task['date_fix_released'])
		);
	}

	$nextCollectionPoint = null;
	if (isset($data['next_collection_link'])) {
		$nextCollectionPoint = $data['next_collection_link'];
	}
}

echo 'Got all tasks.';
echo 'Time span: '.date(DATE_RFC2822, $timeFrom).' -- '.date(DATE_RFC2822, $timeTo);

$dateStatuses = array('fixed', 'in_progress', 'created');

$chart = array();
foreach ($tasks as $task) {
	for ($time = $timeTo; $time > $timeFrom; $time -= $timeInterval) {
		foreach ($dateStatuses as $status) {
			$statusDate = $task['date_'.$status];
			if ($statusDate === -1 || $statusDate === false) {
				continue;
			}
			if ($statusDate <= $time) {
				@$chart[$time][$status]++;
				break; // Count each task only once
			}
		}
	}
}

ksort($chart);

file_put_contents('./chart.json', json_encode($chart, JSON_PRETTY_PRINT));

echo 'Done.';

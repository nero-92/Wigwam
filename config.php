<?php

function get_parts_list() {
	$output = new \stdClass();
	$output->mobo = get_type_list('mobo');
	$output->cpu = get_type_list('cpu');
	$output->ram = get_type_list('ram');
	$output->gpu = get_type_list('gpu');
	$output->sound = get_type_list('sound');
	$output->net = get_type_list('net');
	$output->hdd = get_type_list('hdd');
	$output->ssd = get_type_list('ssd');
	$output->optic = get_type_list('optic');
	$output->chassis = get_type_list('chassis');
	$output->psu = get_type_list('psu');
	$output->cooler = get_type_list('cooler');
	$output->os = get_type_list('os');
	$output->none = get_type_list('none');

	return json_encode($output);
}

function get_type_list($type) {

	require 'start.php';

	$partsQuery = "
		SELECT parts.part_id, name, price
		FROM parts
		WHERE type = '".$type."';
	";
	$parts = $mydb->query($partsQuery);
	if(!$parts) return false;

	$output = array();
	$part = new \stdClass();

	foreach($parts->fetchAll() as $row) {
		$part->id = $row['part_id'];
		$part->name = $row['name'];
		$part->price = $row['price'];

		$output[] = clone $part;
	}

	return $output;
}

?>
<?php

function get_parts_list($product) {
	$output = new \stdClass();
	$output->mobo = get_type_list($product, 'mobo');
	$output->cpu = get_type_list($product, 'cpu');
	$output->ram = get_type_list($product, 'ram');
	$output->gpu = get_type_list($product, 'gpu');
	$output->sound = get_type_list($product, 'sound');
	$output->net = get_type_list($product, 'net');
	$output->hdd = get_type_list($product, 'hdd');
	$output->ssd = get_type_list($product, 'ssd');
	$output->m2 = get_type_list($product, 'm2');
	$output->optic = get_type_list($product, 'optic');
	$output->chassis = get_type_list($product, 'chassis');
	$output->psu = get_type_list($product, 'psu');
	$output->cooler = get_type_list($product, 'cooler');
	$output->os = get_type_list($product, 'os');
	$output->monitor = get_type_list($product, 'monitor');
	$output->speakers = get_type_list($product, 'speakers');
	$output->keyboard = get_type_list($product, 'keyboard');
	$output->mouse = get_type_list($product, 'mouse');
	$output->none = get_type_list($product, 'none');

	return json_encode($output);
}

function get_type_list($product, $type) {

	require '../start.php';

	$partsQuery = "
		SELECT parts.part_id, name, price
		FROM config_options
		INNER JOIN parts
		ON config_options.part_id = parts.part_id
		WHERE product_id = '".$product."' AND type = '".$type."';
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
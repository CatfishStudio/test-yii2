<?php

foreach ($query as $value) {
	echo '<ul>';
	echo '<li>' . $value->code . ' ' . $value->name . '</li>';
	echo '<ul>';
	$city_array = $value->city;
	foreach ($city_array as $city) {
		echo '<li>' . $city->name . '</li>';
	}
	echo '</ul>';
	echo '</ul>';
}

echo '<pre>' . print_r($query, true) . '</pre>';
<?php

function menu(){
	$menu = array(
		array(
			'nama' => 'Dashboard',
			'link' => 'dashboard',
			'icon' => 'home'
		),
		array(
			'nama' => 'City',
			'link' => 'city',
			'icon' => 'home'
		),
		array(
			'nama' => 'Port',
			'link' => 'port',
			'icon' => 'home'
		),
		array(
			'nama' => 'Wholesaler',
			'link' => 'wholesaler',
			'icon' => 'home'
		),
		array(
			'nama' => 'Counter',
			'link' => 'counter',
			'icon' => 'home'
		)
	);
	
	return $menu;
}

function in_array_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
            return true;
        }
    }

    return false;
}
?>
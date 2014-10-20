<?php
	foreach ((array)@$js as $key => $value) {
		echo get_js($value);
	}

	foreach ((array)@$custom as $key => $value) {
		echo '<script src="'.base_url().'public/assets/scripts/custom/'.$value.'.js" type="text/javascript"></script>';
	}

	foreach ((array)@$core as $key => $value) {
		echo '<script src="'.base_url().'public/assets/scripts/core/'.$value.'.js" type="text/javascript"></script>';
	}
?>
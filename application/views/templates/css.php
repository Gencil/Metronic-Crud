<?php
	foreach ((array)@$core as $key => $value) {
		echo get_css($value);
	}
?>
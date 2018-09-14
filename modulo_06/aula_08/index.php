<?php

	$arr = ['<p>alane</p>', 'beto','<h1>pedra</h1>'];
	print_r(array_map('strip_tags', $arr));


?>
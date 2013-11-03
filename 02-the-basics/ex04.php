<?php

if (!function_exists('getallheaders')) {
	function getallheaders() {
		$headers = '';
		
		foreach ($_SERVER as $name => $value) {
			if (substr($name, 0, 5) == 'HTTP_') {
				$headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
			}
		}
		
		return $headers;
	}
}

// ---

$headers = getallheaders();

// ---

if (array_key_exists('Cookie', $headers)) {
	echo 'Well done!';
} else {
	echo 'Try again!';
}

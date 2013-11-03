<?php

if (preg_match('#^https?://#i', $_SERVER['REQUEST_URI'])) {
	echo 'Well done!';
} else {
	echo 'Try again!';
}

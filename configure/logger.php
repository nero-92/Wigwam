<?php

function mylog($line) {
	$file = 'phplog.txt';
	$content = file_get_contents($file);
	$content .= $line."\n";
	file_put_contents($file, $content);
}

function clearlog() {
	file_put_contents('phplog.txt', '');
}

?>
#!/usr/bin/php
<?php

if (!array_key_exists(1, $argv)) {
	die('Need new name' . PHP_EOL);
}

$old = 'changeme';
$uold = 'CHANGEME';

$new = strtolower($argv[1]);
$unew = $argv[1];

$files = array(
	"features/" . $uold . ".feature",
	"features/step_definitions/" . $uold . "_steps.php",
	"src/" . $uold . ".php",
	"tests/unit/" . $uold . "Test.php"
);

$contents = array(
	"phpdox.xml.dist",	
	"phpunit.xml.dist",
	"src/" . $unew . ".php",
	"tests/unit/" . $unew . "Test.php",
	"features/step_definitions/" . $unew . "_steps.php"
);

foreach($files as $file) {
	$new = str_replace($uold, $unew, $file);
	rename($file, $new);
}

foreach($contents as $file) {
	$data = file_get_contents($file);
	$data = preg_replace("/" . $uold . "/", $unew, $data);
	$data = preg_replace("/" . $old . "/", $new, $data);
	file_put_contents($file, $data);
}



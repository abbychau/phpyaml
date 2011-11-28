<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL|E_STRICT);

	require_once "phpyaml.php";

	$a = yamlToArray("dummy.yaml");

	print_r($a);
?>
<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL|E_STRICT);

	require_once "phpyaml.php";

	$a = yamlToArray("dummy.yaml");

	print_r($a);

	/*
		Will display this:

		Array
		(
		    [vara] => some value 
		    [varb] => value2
		    [don] => Don Kuntz
		    [title] => "A B"
		    [num] => 45
		)
	*/
?>
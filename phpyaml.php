<?php
	function yamlFileToArray($file) {
		return yamlToArray($file);
	}

	function yamlToArray($file) {
		$f = fopen($file, 'r');
		return yamlTextToArray(fread($f, filesize($file)));
	}

	function yamlTextToArray($text) {
		$arr = array();

		$tLines = explode("\n", $text);
		foreach($tLines as $l) {
			if (substr($l, 0, 1) != "#" && $l != "") {
				// is there a comment at the end of the line? REMOVE IT
				$cex = explode("#", $l);
				$l = $cex[0];
				// make $arr[KEY] = VALUE
				$t = explode(":", $l);
				$arr[$t[0]] = $t[1];
			}
		}

		return $arr;
	}
?>
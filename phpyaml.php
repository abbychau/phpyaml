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

				if (substr($t[1], 0, 1) == " ") {
					$t[1] = substr($t[1], 1);
				}

				if (substr($t[1], 0, 1) == "\"" && substr($t[1], -1) == "\"") {
					$t[1] = substr($t[1], 1, -1);
				}

				$arr[$t[0]] = $t[1];
				if (count($t) > 2) {
					for($i = 2; $i < count($t); $i++) {
						$arr[$t[0]] .= ":" . $t[$i];
					}
				}
			}
		}

		return $arr;
	}
?>
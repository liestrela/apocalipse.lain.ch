<?php
	if (!isset($_GET['lang'])) include_once('lang-en.inc.php');
	else {
		switch ($_GET['lang']) {
			case "br":
				include_once('lang-br.inc.php');
				break;
			default:
				include_once('lang-en.inc.php');
		}
	}
?>

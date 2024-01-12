<?php
$url = $_GET['u'];
if($url == null || $url == "") {
	header("HTTP/1.0 404 Not Found");
	die();
}
echo file_get_contents($url);
?>

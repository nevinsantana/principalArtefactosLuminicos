<?php
$url = "inicio/?fresh=1407367492";
if (isset($_GET["fresh"])) {
	$url .= "?fresh=" . $_GET["fresh"];
}
header("Location: " . $url);
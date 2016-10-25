<?php
error_reporting(0);
require_once('classes/steam.class.php');

$steam = new SteamTrade();
print_r($steam);
$steam->setup(
	'sessionID',
	'cookies'
	);
?>
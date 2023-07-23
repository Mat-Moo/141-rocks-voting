<?php
include_once "./common/onefourone.php";

$debug->log($_SERVER['SCRIPT_NAME']);
$debug->log($argv);

$script = $argv[0];
$command = $argv[1];

if ($command == "--list") {
	echo "Media,Playlist";
	exit(0);
}


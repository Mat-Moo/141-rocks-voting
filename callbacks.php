<?php
include_once "./common/onefourone.php";

$script = $argv[0];
$command = $argv[1];

if($command == "--list") {
			echo "type,Sequence,Media,title";
			exit(0);
}

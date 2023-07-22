<?php
include_once('./common/class.debug.php');
debug::log('test');

$script = $argv[0];
$command = $argv[1];


if($command == "--list") {
			echo "type,Sequence,Media,title";
			exit(0);
}

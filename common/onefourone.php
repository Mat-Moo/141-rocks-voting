<?php
// get fpp base info
include_once "/opt/fpp/www/common.php";

$logFile = $settings['logDirectory']."/".$pluginName.".log";

include_once "./class.debug.php";
$debug = new debug($logfile);
$debug->log("FPP Matrix tools plugin is not installed, cannot use this plugin with out it");
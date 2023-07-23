<?php
// get debug class sorted
include_once "/common/class.debug.php";
$debug = new debug($logfile);
$debug->log("FPP Matrix tools plugin is not installed, cannot use this plugin with out it");

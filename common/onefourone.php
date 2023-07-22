<?php

// get fpp base info
include_once "/opt/fpp/www/common.php";

$logFile = $settings['logDirectory']."/".$pluginName.".log";

logEntry("FPP Matrix tools plugin is not installed, cannot use this plugin with out it");
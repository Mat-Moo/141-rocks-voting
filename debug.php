<?php
$debug = file_get_contents('/tmp/141-rocks.txt');
if ($debug === false) {
    echo "Read fail";
    exit;
}

echo $debug;

<h1>141 Rocks voting plugin</h1>
<h2>Matthew Augier</h2>

<?php
$path = "/home/fpp/media/plugins/141-rocks-voting";

function tailFile($filepath, $lines = 1) {
    return trim(implode("", array_slice(file($filepath), -$lines)));
}

function isServiceRunning() {
    $exists = false;
    exec("ps -ax | grep -i vote-service.py  | grep -v grep", $pids);
    if (count($pids) > 0) {
        $exists = true;
    }
    return $exists;
}

function startService() {
    global $path;

    $privateKey = ReadSettingFromFile('privateKey', '141-rocks-voting');
    WriteSettingToFile("publicApiKey", "false", "141-rocks-voting");
    shell_exec("/usr/bin/python3 $path/scripts/vote-service.py $privateKey > /dev/null &");
}

function killService() {
    shell_exec("kill $(ps aux | grep 'vote-service.py' | grep -v grep | awk '{print $2}')");
}

function saveKey($key) {
    global $path;
    shell_exec("echo 'key: $key' > $path/key.txt");
}

if (isset($_POST['startService'])) {
    startService();
}

if (isset($_POST['killService'])) {
    killService();
}

if (isset($_POST['generateNewKey'])) {
    shell_exec("/usr/bin/python3 $path/scripts/vote-service.py newPrivateKey > /dev/null");
}

if (isset($_POST['loadSettings'])) {
    $privateKey = ReadSettingFromFile('privateKey', 'brp-voting');
    shell_exec("/usr/bin/python3 $path/scripts/vote-service.py loadSettings $privateKey > /dev/null");
}

?>

<script src="https://kit.fontawesome.com/4b00e40eba.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://barkersrandomprojects.com/assets/lib/color-wheel/jquery.wheelcolorpicker.min.js"></script>
<link type="text/css" rel="stylesheet" href="https://barkersrandomprojects.com/assets/lib/color-wheel/wheelcolorpicker.css"/>


<div>
test
</div>
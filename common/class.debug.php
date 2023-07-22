<?php

class Debug
{
    protected static $logFile = '/tmp/141-rocks-debug.txt';

    function __construct()
    {
        if (! file_exists($logFile)) {
            touch($logFile);
        }
    } 

    public static function log($message)
    {
        file_put_contents($logFile, $message);
    }
}
<?php

class Debug
{
    protected string $logFile;

    public function __construct()
    {
        $this->logFile = $_SERVER['HOME'].'/media/logs/141-rocks.php';
        if (! file_exists($this->logFile)) {
            touch($this->logFile);
        }
    } 

    public function log(string $message)
    {
        file_put_contents($this->logFile, $message);
    }
}

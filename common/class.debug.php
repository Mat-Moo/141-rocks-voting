<?php

class Debug
{
    protected string $logFile;

    public function __construct(string $logFile)
    {
        $this->logFile = $logFile;
        if (! file_exists($this->logFile)) {
            touch($this->logFile);
        }
    } 

    public function log(string $message)
    {
        file_put_contents($this->logFile, $message);
    }
}
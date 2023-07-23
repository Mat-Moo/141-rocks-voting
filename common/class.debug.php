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

    public function log($message)
    {
        if (! is_array($message))
        {
            $message = [$message];
        }

        foreach($message as $output) {
            file_put_contents($this->logFile, $output);
        }
    }
}

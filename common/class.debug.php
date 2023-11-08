<?php

class Debug
{
    protected $logFile;

    public function __construct()
    {
        $this->logFile = $_SERVER['LOGDIR'].'/141-rocks.log';
        if (! file_exists($this->logFile)) {
            touch($this->logFile);
        }
    }

    public function log()
    {
        $count = func_num_args();
        if ($count < 1) {
            return;
        };
        $arg_list = func_get_args();
        for ($i = 0; $i < $count; $i++) {
            $message = $arg_list[$i];
            if (!is_array($message)) {
                $message = [$message];
            }
            foreach($message as $key => $value) {
                if (is_array($value)) {
                    $this->log($value);
                    continue;
                }
                file_put_contents($this->logFile, implode(' ' , [date("Y-m-d H:i:s"), $key, ":", $value, "\r\n"]), FILE_APPEND);
            }
        }
    }

}
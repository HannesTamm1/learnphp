<?php

class Job
{
    public function task(consoleLogger $logger)
    {
        for ($i = 0; $i < 10; $i++) {
            $logger->log("Task $i completed");
        }
    }
}

class consoleLogger implements Logger{
    public function log($message){
        echo $message . "\n";
    }
}

interface Logger {
    public function log($message);
}

class fileLogger {
    public function log($message){
        $file = fopen('log.log', 'a');
        fwrite($file, $message . "\n");
        fclose($file);
    }
}

$job = new Job();
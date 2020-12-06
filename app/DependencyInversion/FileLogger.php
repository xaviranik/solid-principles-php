<?php


namespace DIP;


use DIP\Contracts\LoggableInterface;

class FileLogger implements LoggableInterface
{

    /**
     * @param $message
     */
    public function log($message)
    {
        echo "Logging the message in file: ".$message;
    }

}
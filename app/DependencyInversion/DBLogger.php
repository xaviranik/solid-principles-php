<?php


namespace DIP;


use DIP\Contracts\LoggableInterface;

/**
 * Class DBLogger
 *
 * @package DIP
 */
class DBLogger implements LoggableInterface
{

    /**
     * @param $message
     */
    public function log($message)
    {
        echo "Logging the message in DB: ".$message;
    }

}
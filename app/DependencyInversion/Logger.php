<?php


namespace DIP;

use DIP\Contracts\LoggableInterface;

/**
 * Class Logger
 *
 * @package DIP
 */
class Logger
{

    /**
     * Logger constructor.
     *
     * @param  \DIP\Contracts\LoggableInterface  $logger
     * @param $message
     */
    public function __construct(LoggableInterface $logger, $message)
    {
        $logger->log($message);
    }

}
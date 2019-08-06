<?php

namespace Leonsw\Http;

class TooManyRequestsException extends Exception
{
    /**
     * TooManyRequestsException constructor.
     * @param null $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct(429, $message, $code, $previous);
    }
}

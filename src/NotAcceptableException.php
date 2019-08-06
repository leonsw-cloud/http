<?php

namespace Leonsw\Http;

class NotAcceptableException extends Exception
{
    /**
     * NotAcceptableException constructor.
     * @param null $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct(406, $message, $code, $previous);
    }
}

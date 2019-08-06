<?php

namespace Leonsw\Http;

class MethodNotAllowedException extends Exception
{
    /**
     * MethodNotAllowedException constructor.
     * @param null $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct(405, $message, $code, $previous);
    }
}

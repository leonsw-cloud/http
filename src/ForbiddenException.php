<?php

namespace Leonsw\Http;

class ForbiddenException extends Exception
{
    /**
     * ForbiddenException constructor.
     * @param null $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct(403, $message, $code, $previous);
    }
}

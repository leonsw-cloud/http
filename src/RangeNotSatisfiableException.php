<?php

namespace Leonsw\Http;

class RangeNotSatisfiableException extends Exception
{
    /**
     * RangeNotSatisfiableException constructor.
     * @param null $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct(416, $message, $code, $previous);
    }
}

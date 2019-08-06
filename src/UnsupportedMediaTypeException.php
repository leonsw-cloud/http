<?php

namespace Leonsw\Http;

class UnsupportedMediaTypeException extends Exception
{
    /**
     * UnsupportedMediaTypeException constructor.
     * @param null $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct(415, $message, $code, $previous);
    }
}

<?php

namespace Leonsw\Http;

class UnauthorizedException extends HttpException
{
    /**
     * UnauthorizedException constructor.
     * @param null $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct(401, $message, $code, $previous);
    }
}

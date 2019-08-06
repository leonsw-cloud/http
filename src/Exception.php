<?php

namespace Leonsw\Http;

class Exception extends \Exception
{
    /**
     * @var int HTTP status code, such as 403, 404, 500, etc.
     */
    public $statusCode;

    /**
     * Exception constructor.
     * @param $status
     * @param null $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct($status, $message = null, $code = 0, \Exception $previous = null)
    {
        $this->statusCode = $status;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return StatusMap::reason($this->statusCode);
    }
}

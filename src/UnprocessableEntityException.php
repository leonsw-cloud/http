<?php

namespace Leonsw\Http;

class UnprocessableEntityException extends HttpException
{
    /**
     * Constructor.
     * @param string $message error message
     * @param int $code error code
     * @param \Exception $previous The previous exception used for the exception chaining.
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct(422, $message, $code, $previous);
    }

    protected $errors;

    public function addError(string $field, string $message)
    {
        $this->errors[$field][] = $message;
        return $this;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public static function error(string $field, string $message)
    {
        $exception = new static();
        $exception->addError($field, $message);
        return $exception;
    }
}

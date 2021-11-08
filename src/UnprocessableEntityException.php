<?php

declare(strict_types=1);
/**
 * This file is part of Leonsw.
 *
 * @link     https://leonsw.com
 * @document https://docs.leonsw.com
 * @contact  leonsw.com@gmail.com
 * @license  https://leonsw.com/LICENSE
 */
namespace Leonsw\Http;

class UnprocessableEntityException extends HttpException
{
    protected $errors;

    public function __construct($message = null, $code = 0, \Throwable $previous = null)
    {
        parent::__construct(422, $message, $code, $previous);
    }

    public function addError(string $field, string $message)
    {
        $this->errors[$field][] = $message;
        return $this;
    }

    public function setErrors(array $errors)
    {
        $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getKeyErrors(string $key)
    {
        return $this->errors[$key] ?? [];
    }

    public function getFirstKey()
    {
        foreach ($this->errors as $key => $errors) {
            $error = array_shift($errors);
            break;
        }
        return $key;
    }

    public function getFirstError()
    {
        foreach ($this->errors as $key => $errors) {
            $error = array_shift($errors);
            break;
        }
        return $error;
    }

    public function getLastKey()
    {
        foreach ($this->errors as $key => $errors) {
            $error = array_pop($errors);
        }
        return $key;
    }

    public function getLastError()
    {
        foreach ($this->errors as $key => $errors) {
            $error = array_pop($errors);
        }
        return $error;
    }

    public static function error(string $key, string $message)
    {
        $exception = new static();
        $exception->addError($key, $message);
        return $exception;
    }

    public static function errors(array $errors)
    {
        $exception = new static();
        $exception->setErrors($errors);
        return $exception;
    }
}

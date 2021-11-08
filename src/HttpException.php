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

use RuntimeException;

class HttpException extends RuntimeException
{
    /**
     * @var int HTTP status code, such as 403, 404, 500, etc
     */
    public $statusCode;

    /**
     * @param int $status HTTP status
     * @param null|string $message error message
     * @param int $code error code
     */
    public function __construct($status, $message = '', $code = 0, \Throwable $previous = null)
    {
        $this->statusCode = $status;
        if (is_null($message)) {
            $message = StatusMap::reason($this->statusCode);
        }
        parent::__construct($message, $code, $previous);
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @return string the user-friendly name of this exception
     */
    public function getName(): string
    {
        return StatusMap::reason($this->statusCode);
    }
}

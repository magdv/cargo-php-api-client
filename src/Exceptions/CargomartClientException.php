<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Exceptions;

abstract class CargomartClientException extends \Exception
{
    public const UNKNOWN_ERROR = 10000;
    public const JSON_ENCODE_DECODE_ERROR = 10001;
    public const HTTP_CLIENT_ERROR = 10002;
}

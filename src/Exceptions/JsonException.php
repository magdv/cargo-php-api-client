<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Exceptions;

use Throwable;

class JsonException extends \Exception
{
    private static $jsonErrorMessages = [
        JSON_ERROR_DEPTH => 'The maximum stack depth has been exceeded.',
        JSON_ERROR_STATE_MISMATCH => 'Invalid or malformed JSON.',
        JSON_ERROR_CTRL_CHAR => 'Control character error, possibly incorrectly encoded.',
        JSON_ERROR_SYNTAX => 'Syntax error.',
        JSON_ERROR_UTF8 => 'Malformed UTF-8 characters, possibly incorrectly encoded.',
        JSON_ERROR_RECURSION => 'One or more recursive references in the value to be encoded.',
        JSON_ERROR_INF_OR_NAN => 'One or more NAN or INF values in the value to be encoded',
        JSON_ERROR_UNSUPPORTED_TYPE => 'A value of a type that cannot be encoded was given',
    ];

    public function __construct($code = 0, Throwable $previous = null)
    {
        parent::__construct(
            self::$jsonErrorMessages[$code] ?? 'Unknown JSON encoding/decoding error.',
            $code,
            $previous
        );
    }
}

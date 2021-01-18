<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Utils;

use Cargomart\ApiClient\Exceptions\JsonException;

class Json
{
    /**
     * @param            $value
     * @param int|string $options
     *
     * @throws JsonException
     * @return string
     */
    public static function encode($value, int $options = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE): string
    {
        set_error_handler(static function () {
            static::handleJsonError(JSON_ERROR_SYNTAX);
        }, E_WARNING);
        $json = json_encode($value, $options);
        restore_error_handler();
        static::handleJsonError(json_last_error());

        return $json;
    }

    /**
     * @param string $json
     *
     * @throws JsonException
     * @return array
     */
    public static function decode(string $json): array
    {
        $decode = json_decode((string)$json, true);
        static::handleJsonError(json_last_error());

        return $decode;
    }

    /**
     * @param int $lastError
     *
     * @throws JsonException
     */
    private static function handleJsonError(int $lastError): void
    {
        if ($lastError === JSON_ERROR_NONE) {
            return;
        }

        throw new JsonException($lastError);
    }
}

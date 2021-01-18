<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Exceptions;

use Throwable;

class JsonEncodeDecodeError extends CargomartClientException
{
    public function __construct(Throwable $previous = null)
    {
        parent::__construct(
            'Ошибка при кодировании/декодировании json',
            CargomartClientException::JSON_ENCODE_DECODE_ERROR,
            $previous
        );
    }
}

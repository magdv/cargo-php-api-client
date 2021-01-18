<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Exceptions;

use Throwable;

class UnknownError extends CargomartClientException
{
    public function __construct(Throwable $previous = null)
    {
        parent::__construct(
            'Неизвестная ошибка',
            CargomartClientException::UNKNOWN_ERROR,
            $previous
        );
    }
}

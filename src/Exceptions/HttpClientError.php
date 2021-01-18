<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Exceptions;

use Throwable;

class HttpClientError extends CargomartClientException
{
    public function __construct(Throwable $previous = null)
    {
        parent::__construct(
            'Ошибка во время HTTP запроса',
            CargomartClientException::HTTP_CLIENT_ERROR,
            $previous
        );
    }
}

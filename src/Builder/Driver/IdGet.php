<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Driver;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Driver\Responses\DriverResponse;

class IdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение информации по водителю.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): DriverResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            DriverResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Driver;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Driver\Requests\DriverPostRequest;
use Cargomart\ApiClient\Entity\Driver\Responses\DriverResponse;

class IdPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Обновить данные водителя.
     *
     * @return DriverResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(DriverPostRequest $body): DriverResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            DriverResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Driver\Requests\DriverPostRequest;
use Cargomart\ApiClient\Entity\Driver\Responses\DriverResponse;

class DriverPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание нового водителя.
     *
     * @return DriverResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(DriverPostRequest $body): DriverResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            DriverResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderClientAccessListResponse;

class ClientAccessGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка исключеных партнеров.
     *
     * @return OrderClientAccessListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderClientAccessListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderClientAccessListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\BrokerResponse;

class BrokerGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение брокера на заказ.
     *
     * @return BrokerResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): BrokerResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            BrokerResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\BrokerResponse;

class BrokerGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка брокеров.
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

    /**
     * Массив id хэшей заказов
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qFilterOrder(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[order]']);
        } else {
            $c->query['filter[order]'] = $value;
        }

        return $c;
    }
}

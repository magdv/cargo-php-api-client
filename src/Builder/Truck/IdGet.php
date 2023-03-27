<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/truck/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Truck;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Truck\Responses\TruckItem;

final class IdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Информация о конкретном ТС
     *
     * @return TruckItem
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): TruckItem
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            TruckItem::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Версия API запроса
     *
     * @var null|int $value
     *
     * @return self
     */
    public function xTruckVersionHeader(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->headers['X-Truck-Version']);
        } else {
            $c->headers['X-Truck-Version'] = $value;
        }

        return $c;
    }
}

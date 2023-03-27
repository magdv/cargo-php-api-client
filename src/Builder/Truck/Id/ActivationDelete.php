<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/truck/{id}/activation
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Truck\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Truck\Responses\TruckItem;

final class ActivationDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Удаление возможности создавать фильтр на машину для поиска заказов
     *
     * @return TruckItem
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): TruckItem
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            TruckItem::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}

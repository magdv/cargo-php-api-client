<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Responses\PriceLocalPoolListResponse;

class PoolGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка пулов направлений и цен.
     *
     * @return PriceLocalPoolListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): PriceLocalPoolListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PriceLocalPoolListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Фильтр по активности записи
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterIsActive(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[isActive]']);
        } else {
            $c->query['filter[isActive]'] = $value;
        }

        return $c;
    }

    /**
     * Фильтр по id пула
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[id]']);
        } else {
            $c->query['filter[id]'] = $value;
        }

        return $c;
    }

    /**
     * Фильтр по коду точки отправления
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterDepartureCode(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[departureCode]']);
        } else {
            $c->query['filter[departureCode]'] = $value;
        }

        return $c;
    }

    /**
     * Фильтр по коду точки назначения
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterDestinationCode(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[destinationCode]']);
        } else {
            $c->query['filter[destinationCode]'] = $value;
        }

        return $c;
    }
}

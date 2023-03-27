<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor/price-local/price
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalListResponse;

final class PriceGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получения списка элементов справочника цен
     *
     * @return PriceLocalListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): PriceLocalListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PriceLocalListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Фильтр по идентификатору пула направлений и цен.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterPoolId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[poolId]']);
        } else {
            $c->query['filter[poolId]'] = $value;
        }

        return $c;
    }

    /**
     * Фильтр по идентификатору типа кузова
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterTruckTypeId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[truckTypeId]']);
        } else {
            $c->query['filter[truckTypeId]'] = $value;
        }

        return $c;
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

    /**
     * Номер страницы для постраничной навигации
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qPage(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['page']);
        } else {
            $c->query['page'] = $value;
        }

        return $c;
    }

    /**
     * Количество элементов на страницу
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qPerPage(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['perPage']);
        } else {
            $c->query['perPage'] = $value;
        }

        return $c;
    }
}

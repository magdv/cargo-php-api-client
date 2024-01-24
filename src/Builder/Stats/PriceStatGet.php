<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Stats;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Stats\PriceStat\Responses\PriceStatResponse;

class PriceStatGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить цену по маршруту
     *
     * @return PriceStatResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): PriceStatResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PriceStatResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Маршрут в виде списка идентификаторов пунктов погрузки
     *
     * @var null|int[] $value
     *
     * @return self
     */
    public function qStoragePointIds(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['storagePointIds']);
        } else {
            $c->query['storagePointIds'] = $value;
        }

        return $c;
    }

    /**
     * Дата погрузки ОТ. YYYY-MM-DD. По умолчанию 14 дней назад.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qLoadingPointFromDate(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['loadingPointFromDate']);
        } else {
            $c->query['loadingPointFromDate'] = $value;
        }

        return $c;
    }

    /**
     * Дата погрузки ДО. YYYY-MM-DD. По умолчанию сегодня.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qLoadingPointToDate(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['loadingPointToDate']);
        } else {
            $c->query['loadingPointToDate'] = $value;
        }

        return $c;
    }

    /**
     * Тип кузова(например:4-рефрижератор,5-тент,10-изотерм)
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qTruckTypeId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['truckTypeId']);
        } else {
            $c->query['truckTypeId'] = $value;
        }

        return $c;
    }
}

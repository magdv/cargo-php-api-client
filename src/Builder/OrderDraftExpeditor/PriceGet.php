<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftExpeditor;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderDraftExpeditorPriceResponse;

class PriceGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить цену по маршруту
     *
     * @return OrderDraftExpeditorPriceResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderDraftExpeditorPriceResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderDraftExpeditorPriceResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Список КЛАДР кодов пунктов
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qRoutePoints(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['routePoints']);
        } else {
            $c->query['routePoints'] = $value;
        }

        return $c;
    }

    /**
     * Список идентификаторов пунктов погрузки
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
     * Дата работы на пункте погрузки. YYYY-MM-DD
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
     * Время работы ОТ на пункте погрузки. HH:mm::ss
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qLoadingPointFromTime(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['loadingPointFromTime']);
        } else {
            $c->query['loadingPointFromTime'] = $value;
        }

        return $c;
    }

    /**
     * Дата работы на пункте выгрузки. YYYY-MM-DD
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qUnloadingPointFromDate(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['unloadingPointFromDate']);
        } else {
            $c->query['unloadingPointFromDate'] = $value;
        }

        return $c;
    }

    /**
     * Время работы ОТ на пункте выгрузки. HH:mm::ss
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qUnloadingPointFromTime(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['unloadingPointFromTime']);
        } else {
            $c->query['unloadingPointFromTime'] = $value;
        }

        return $c;
    }

    /**
     * Идентификатор дочерней компании
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qCompanyBranchId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['companyBranchId']);
        } else {
            $c->query['companyBranchId'] = $value;
        }

        return $c;
    }

    /**
     * Тип грузовика
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

    /**
     * Вес груза(в тоннах)
     *
     * @var null|float $value
     *
     * @return self
     */
    public function qLoadWeight(?float $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['loadWeight']);
        } else {
            $c->query['loadWeight'] = $value;
        }

        return $c;
    }

    /**
     * Объём груза(в м3)
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qLoadCapacity(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['loadCapacity']);
        } else {
            $c->query['loadCapacity'] = $value;
        }

        return $c;
    }

    /**
     * Ставка НДС
     *
     * @var null|float $value
     *
     * @return self
     */
    public function qVatRate(?float $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['vatRate']);
        } else {
            $c->query['vatRate'] = $value;
        }

        return $c;
    }
}

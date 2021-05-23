<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalListResponse;

class ExpeditorProposalGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['page' => 1, 'perPage' => 20];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод для получения списка заказов Экспедитора согласно фильтру.
     *
     * @return ProposalListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ProposalListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ProposalListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Тип показываемого заказа.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterType(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[type]']);
        } else {
            $c->query['filter[type]'] = $value;
        }

        return $c;
    }

    /**
     * Порядковый номер заказа.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterSerial(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[serial]']);
        } else {
            $c->query['filter[serial]'] = $value;
        }

        return $c;
    }

    /**
     * Код кладр пункта отправления.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterDeparture(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[departure]']);
        } else {
            $c->query['filter[departure]'] = $value;
        }

        return $c;
    }

    /**
     * Код кладр пункта назначения.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterDestination(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[destination]']);
        } else {
            $c->query['filter[destination]'] = $value;
        }

        return $c;
    }

    /**
     * Дата погрузки ОТ.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterLoadingFrom(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[loadingFrom]']);
        } else {
            $c->query['filter[loadingFrom]'] = $value;
        }

        return $c;
    }

    /**
     * Дата погрузки ДО.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterLoadingTo(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[loadingTo]']);
        } else {
            $c->query['filter[loadingTo]'] = $value;
        }

        return $c;
    }

    /**
     * Список идентификаторов типов ТС.
     *
     * @var null|int[] $value
     *
     * @return self
     */
    public function qFilterTruckType(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[truckType]']);
        } else {
            $c->query['filter[truckType]'] = $value;
        }

        return $c;
    }

    /**
     * Вес груза в ОТ, кг.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterWeightFrom(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[weightFrom]']);
        } else {
            $c->query['filter[weightFrom]'] = $value;
        }

        return $c;
    }

    /**
     * Вес груза в ДО, кг.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterWeightTo(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[weightTo]']);
        } else {
            $c->query['filter[weightTo]'] = $value;
        }

        return $c;
    }

    /**
     * Объём груза в ОТ, м3.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterCapacityFrom(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[capacityFrom]']);
        } else {
            $c->query['filter[capacityFrom]'] = $value;
        }

        return $c;
    }

    /**
     * Объём груза в ДО, м3.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterCapacityTo(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[capacityTo]']);
        } else {
            $c->query['filter[capacityTo]'] = $value;
        }

        return $c;
    }

    /**
     * Массив id cтатусов заказов. 100 - нет ставок, 250 - не подтвержден, 240 - подтвержден, 110 - отказ перевозчика, 120 - отказ отправителя, 6 - в рейсе, 7 - исполнен, 21 - на модерации, 22 - отклонен с модерации.
     *
     * @var null|int[] $value
     *
     * @return self
     */
    public function qFilterStatus(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[status]']);
        } else {
            $c->query['filter[status]'] = $value;
        }

        return $c;
    }

    /**
     * Хэш код компании перевозчика
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterCarrier(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[carrier]']);
        } else {
            $c->query['filter[carrier]'] = $value;
        }

        return $c;
    }

    /**
     * Хэш код компании отправителя
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterConsignor(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[consignor]']);
        } else {
            $c->query['filter[consignor]'] = $value;
        }

        return $c;
    }

    /**
     * ФИО водителя
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterDriverName(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[driverName]']);
        } else {
            $c->query['filter[driverName]'] = $value;
        }

        return $c;
    }

    /**
     * Массив uuid заказов экспедитора
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

    /**
     * Дата создания заказа ДО
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterCreateTo(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[createTo]']);
        } else {
            $c->query['filter[createTo]'] = $value;
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

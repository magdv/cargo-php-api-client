<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/truck
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Truck\Responses\TruckList;

final class TruckGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['page' => 1, 'perPage' => 20];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод возращает список ТС
     *
     * @return TruckList
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): TruckList
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            TruckList::class,
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

    /**
     * Фильтрация по виду ТС (тягач, полуприцеп, фургон, сцепка), передается id
     *
     * @var null|int[] $value
     *
     * @return self
     */
    public function qFilterMode(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[mode]']);
        } else {
            $c->query['filter[mode]'] = $value;
        }

        return $c;
    }

    /**
     * Фильтрация по описанию
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterNote(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[note]']);
        } else {
            $c->query['filter[note]'] = $value;
        }

        return $c;
    }

    /**
     * Фильтрация по Статусу. 0 - без ПТС, 1 - на модерации, 2 - одобрено, 3 - отклонено.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterStatus(?int $value): self
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
     * Идентификатор водителя, для определения рейтинга
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterDriverId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[driverId]']);
        } else {
            $c->query['filter[driverId]'] = $value;
        }

        return $c;
    }

    /**
     * Идентификатор ТС, для определения рейтинга
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterTruckId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[truckId]']);
        } else {
            $c->query['filter[truckId]'] = $value;
        }

        return $c;
    }

    /**
     * Список ключей для сортировки. Доступно: rating, number, createDate
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qSort(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['sort']);
        } else {
            $c->query['sort'] = $value;
        }

        return $c;
    }

    /**
     * Номер страницы
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

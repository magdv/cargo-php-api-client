<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\EmptyDataResponse;

class ExpeditorTaskGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['page' => 1, 'perPage' => 20];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка задач
     *
     * @return EmptyDataResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): EmptyDataResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            EmptyDataResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
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

    /**
     * Поиск по номеру заявки
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterOrderId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[orderId]']);
        } else {
            $c->query['filter[orderId]'] = $value;
        }

        return $c;
    }

    /**
     * Поиск по точке погрузки
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterLocalityName(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[localityName]']);
        } else {
            $c->query['filter[localityName]'] = $value;
        }

        return $c;
    }

    /**
     * Поиск по типу задачи
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
     * Дата погрузки ОТ
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
     * Дата погрузки ДО
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
     * Поиск по водителю
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
     * Поиск по исполнителю
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterWorkerId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[workerId]']);
        } else {
            $c->query['filter[workerId]'] = $value;
        }

        return $c;
    }
}

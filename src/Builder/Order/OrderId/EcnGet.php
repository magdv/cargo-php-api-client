<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderEcnListResponse;

class EcnGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['page' => 1, 'perPage' => 20];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка ЭТрН у заказа
     *
     * @return OrderEcnListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderEcnListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderEcnListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Индекс пункта откуда.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterIndexFrom(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[indexFrom]']);
        } else {
            $c->query['filter[indexFrom]'] = $value;
        }

        return $c;
    }

    /**
     * Индекс пункта куда.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterIndexTo(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[indexTo]']);
        } else {
            $c->query['filter[indexTo]'] = $value;
        }

        return $c;
    }

    /**
     * Тип ТРН.
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
     * Выбрать только активные.
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterIsActive(?bool $value): self
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

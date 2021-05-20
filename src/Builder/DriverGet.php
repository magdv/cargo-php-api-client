<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Driver\Responses\DriverListResponse;

class DriverGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['page' => 1, 'perPage' => 20];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка водителей.
     *
     * @return DriverListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): DriverListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            DriverListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Полнотекстовый поиск одной строкой
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterSearch(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[search]']);
        } else {
            $c->query['filter[search]'] = $value;
        }

        return $c;
    }

    /**
     * Поиск по имени водителя
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterName(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[name]']);
        } else {
            $c->query['filter[name]'] = $value;
        }

        return $c;
    }

    /**
     * Поиск по внешнему номеру
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterExternalId(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[externalId]']);
        } else {
            $c->query['filter[externalId]'] = $value;
        }

        return $c;
    }

    /**
     * Поиск по номеру паспорта
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterPassportNumber(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[passportNumber]']);
        } else {
            $c->query['filter[passportNumber]'] = $value;
        }

        return $c;
    }

    /**
     * Поиск по номеру телефона
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterPhone(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[phone]']);
        } else {
            $c->query['filter[phone]'] = $value;
        }

        return $c;
    }

    /**
     * Идентификаторы ТС, для определения рейтинга
     *
     * @var null|int[] $value
     *
     * @return self
     */
    public function qFilterTruckId(?array $value): self
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
     * Список ключей для сортировки. Доступно: rating.
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
     * Просматриваемая страница
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
     * Количество элементов на одну страницу
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

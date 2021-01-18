<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\StoragePoint\Responses\PointList;

class StoragePointGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод возвращает список пунктов погрузки/выгрузки.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): PointList
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PointList::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Название пункта погрузки/выгрузки
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterTitle(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[title]']);
        } else {
            $c->query['filter[title]'] = $value;
        }

        return $c;
    }

    /**
     * Город
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
     * Внешний идентификатор
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
     * Список ключей для сортировки. Для сортировки доступны поля модели (title, localityName). Сортировка производитсяя по возрастанию. При наличии префикса "-" сортировка будет произведена в обратном порядке.
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
     * Просматриваемая страница, по умолчанию 1
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
     * Количество элементов на одну страницу, по умолчанию 20
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
     * Отсортировать пункты под идентификатору(на первое место)
     *
     * @var null|int[] $value
     *
     * @return self
     */
    public function qSelectedIds(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['selectedIds']);
        } else {
            $c->query['selectedIds'] = $value;
        }

        return $c;
    }
}

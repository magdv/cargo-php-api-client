<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Ac;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\StoragePoint\Responses\StoragePointList;

class StoragePointGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Поиск пунктов погрузки/выгрузки.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): StoragePointList
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            StoragePointList::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Поисковая строка
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
     * Координаты широты
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterLatitude(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[latitude]']);
        } else {
            $c->query['filter[latitude]'] = $value;
        }

        return $c;
    }

    /**
     * Координаты долготы
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterLongitude(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[longitude]']);
        } else {
            $c->query['filter[longitude]'] = $value;
        }

        return $c;
    }

    /**
     * Радиус в метрах
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qFilterRadius(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[radius]']);
        } else {
            $c->query['filter[radius]'] = $value;
        }

        return $c;
    }

    /**
     * Дополнительные id для поиска (на первое место)
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

    /**
     * Страница выдачи.
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
     * лимит выдачи.
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

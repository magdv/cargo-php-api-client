<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/locality
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Locality\Responses\LocalityResponse;

final class LocalityGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Поиск по кладру.
     *
     * @return LocalityResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): LocalityResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            LocalityResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Отсортировать населенные пункты по их коду
     *
     * @var null|string[] $value
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
     * возвращать только конечные населеные пункты
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qIsSettlement(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['isSettlement']);
        } else {
            $c->query['isSettlement'] = $value;
        }

        return $c;
    }

    /**
     * Поисковая строка.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qQuery(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['query']);
        } else {
            $c->query['query'] = $value;
        }

        return $c;
    }

    /**
     * Массив значений фильтра по административным уровням, страна= 10; город федерального значения= 20; областные центры= 30; области= 40; населенные пункты областного значения= 50; районные центры= 60; районы= 70; прочие= 80;
     *
     * @var null|int[] $value
     *
     * @return self
     */
    public function qLevel(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['level']);
        } else {
            $c->query['level'] = $value;
        }

        return $c;
    }

    /**
     * Фильтр по административным уровням
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilter(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter']);
        } else {
            $c->query['filter'] = $value;
        }

        return $c;
    }

    /**
     * Код объекта иерархии для ограничения поиска только по вхождению в этот объект
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qHierarchy(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['hierarchy']);
        } else {
            $c->query['hierarchy'] = $value;
        }

        return $c;
    }

    /**
     * Дополнительная сортировка - тип поиска.
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qSort(?string $value): self
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
     * Номер текущей выбираемой страницы
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
}

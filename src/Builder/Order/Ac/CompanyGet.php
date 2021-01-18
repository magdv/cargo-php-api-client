<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\Ac;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderClientAccessListResponse;

class CompanyGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['filter[isBlocked]' => false, 'filter[isPartner]' => false];

    /** @var string[] */
    public $headers = [];

    /**
     * Поиск по данным контактов точек маршурта текущего клиента.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): OrderClientAccessListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderClientAccessListResponse::class,
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
     * carrier, consignor
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
     * Искать в том числе и среди заблокированных
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterIsBlocked(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[isBlocked]']);
        } else {
            $c->query['filter[isBlocked]'] = $value;
        }

        return $c;
    }

    /**
     * Искать только среди партнеров
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterIsPartner(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[isPartner]']);
        } else {
            $c->query['filter[isPartner]'] = $value;
        }

        return $c;
    }

    /**
     * Отсортировать компании по hash (на первое место)
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

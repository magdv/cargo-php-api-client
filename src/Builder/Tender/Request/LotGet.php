<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Request;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestLotListResponse;

class LotGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['filter[withOffer]' => false, 'page' => 1, 'perPage' => 20];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка лотов по тендеру в статусе запроса цены
     *
     * @return TenderRequestLotListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): TenderRequestLotListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            TenderRequestLotListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Идентификатор тендера в статусе "Сбор предложений".
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilterTenderId(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[tenderId]']);
        } else {
            $c->query['filter[tenderId]'] = $value;
        }

        return $c;
    }

    /**
     * Фильтрация по статусу заказа
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
     * Фильтрация по наличию предложения
     *
     * @var null|bool $value
     *
     * @return self
     */
    public function qFilterWithOffer(?bool $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[withOffer]']);
        } else {
            $c->query['filter[withOffer]'] = $value;
        }

        return $c;
    }

    /**
     * Сортировка списка
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qOrder(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['order']);
        } else {
            $c->query['order'] = $value;
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

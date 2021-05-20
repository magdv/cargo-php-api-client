<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\TruckOrderSearch;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\TruckOrderListSearchResponse;

class TruckIdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['page' => 1, 'perPage' => 20];

    /** @var string[] */
    public $headers = [];

    /**
     * Найти заказы подходящие для выбранной машины по ранее созданным криитериям
     *
     * @return TruckOrderListSearchResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): TruckOrderListSearchResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            TruckOrderListSearchResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Тип заказа.
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qFilterKind(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter[kind]']);
        } else {
            $c->query['filter[kind]'] = $value;
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

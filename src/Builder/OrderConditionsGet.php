<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\OrderConditions\Responses\OrderConditionsResponse;

class OrderConditionsGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить условия перевозки
     *
     * @return OrderConditionsResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderConditionsResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderConditionsResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Список КЛАДР кодов пунктов
     *
     * @var null|string[] $value
     *
     * @return self
     */
    public function qRoutePoints(?array $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['routePoints']);
        } else {
            $c->query['routePoints'] = $value;
        }

        return $c;
    }

    /**
     * Идентификатор дочерней компании
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qCompanyBranchId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['companyBranchId']);
        } else {
            $c->query['companyBranchId'] = $value;
        }

        return $c;
    }

    /**
     * Тип заказа
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qKind(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['kind']);
        } else {
            $c->query['kind'] = $value;
        }

        return $c;
    }
}

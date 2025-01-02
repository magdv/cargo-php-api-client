<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftFtl;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderDraftFtlConditionsResponse;

class ConditionsGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить условия перевозки
     *
     * @return OrderDraftFtlConditionsResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderDraftFtlConditionsResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderDraftFtlConditionsResponse::class,
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
}

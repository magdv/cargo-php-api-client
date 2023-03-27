<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order-draft-expeditor/conditions
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftExpeditor;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderDraftExpeditorConditionsResponse;

final class ConditionsGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить условия перевозки
     *
     * @return OrderDraftExpeditorConditionsResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderDraftExpeditorConditionsResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderDraftExpeditorConditionsResponse::class,
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
}

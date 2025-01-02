<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftExpeditor;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderDraftExpeditorRecommendedPriceResponse;

class RecommendedPriceGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить рекомендованную цену по маршруту
     *
     * @return OrderDraftExpeditorRecommendedPriceResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderDraftExpeditorRecommendedPriceResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderDraftExpeditorRecommendedPriceResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Идентификатор дочерней компании заказчика
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
     * Тип грузовика
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qTruckTypeId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['truckTypeId']);
        } else {
            $c->query['truckTypeId'] = $value;
        }

        return $c;
    }

    /**
     * Код города отправки
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qDepartureCode(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['departureCode']);
        } else {
            $c->query['departureCode'] = $value;
        }

        return $c;
    }

    /**
     * Код города назначения
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qDestinationCode(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['destinationCode']);
        } else {
            $c->query['destinationCode'] = $value;
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
    public function qOrderType(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['orderType']);
        } else {
            $c->query['orderType'] = $value;
        }

        return $c;
    }
}

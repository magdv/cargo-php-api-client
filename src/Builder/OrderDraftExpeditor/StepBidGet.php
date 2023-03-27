<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order-draft-expeditor/step-bid
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftExpeditor;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderDraftExpeditorStepBidResponse;

final class StepBidGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить шаг ставки по цене
     *
     * @return OrderDraftExpeditorStepBidResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderDraftExpeditorStepBidResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderDraftExpeditorStepBidResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Цена для которой нужно рассчитать шаг ставки
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qPrice(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['price']);
        } else {
            $c->query['price'] = $value;
        }

        return $c;
    }

    /**
     * Код валюты в которой указана цена
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qCurrencyCode(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['currencyCode']);
        } else {
            $c->query['currencyCode'] = $value;
        }

        return $c;
    }
}

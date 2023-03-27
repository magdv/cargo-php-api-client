<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order-draft-expeditor
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderDraftExpeditorUpdateRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderDraftExpeditorCruResponse;

final class OrderDraftExpeditorPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создать черновик заказа
     *
     * @return OrderDraftExpeditorCruResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderDraftExpeditorUpdateRequest $body): OrderDraftExpeditorCruResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderDraftExpeditorCruResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}

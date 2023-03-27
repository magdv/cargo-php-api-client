<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order-draft-expeditor/{draftId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftExpeditor;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderDraftExpeditorCruResponse;

final class DraftIdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Просмотр черновика заказа
     *
     * @return OrderDraftExpeditorCruResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderDraftExpeditorCruResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderDraftExpeditorCruResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}

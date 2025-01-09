<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftExpeditor\DraftId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Requests\OrderDraftExpeditorUpdateRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderDraftExpeditorCruResponse;

class PublishPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Публикация черновика заказа.
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

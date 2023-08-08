<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Chat\Responses\ChatListResponse;

class ChatGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка комнат по заказу.
     *
     * @return ChatListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ChatListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ChatListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}

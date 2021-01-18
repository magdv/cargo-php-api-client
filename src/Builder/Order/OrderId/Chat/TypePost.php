<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Chat;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Chat\Responses\ChatResponse;

class TypePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * создание комнаты по типу.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): ChatResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            ChatResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}

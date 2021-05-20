<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Chat;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Chat\Responses\ChatPostListResponse;

class ChatIdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка сообщений чата.
     *
     * @return ChatPostListResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ChatPostListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ChatPostListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Последнее сообщение.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qLastId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['lastId']);
        } else {
            $c->query['lastId'] = $value;
        }

        return $c;
    }

    /**
     * Максимальный идентификатор сообщения.
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qMaxId(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['maxId']);
        } else {
            $c->query['maxId'] = $value;
        }

        return $c;
    }
}

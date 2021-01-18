<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Message\Responses\MessageListResponse;

class MessageGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение всех сообщений
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): MessageListResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            MessageListResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * поиск по сообщениям
     *
     * @var null|string $value
     *
     * @return self
     */
    public function qFilter(?string $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['filter']);
        } else {
            $c->query['filter'] = $value;
        }

        return $c;
    }

    /**
     * Номер страницы
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qPage(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['page']);
        } else {
            $c->query['page'] = $value;
        }

        return $c;
    }

    /**
     * Количество элементов на страницу
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qPerPage(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['perPage']);
        } else {
            $c->query['perPage'] = $value;
        }

        return $c;
    }
}

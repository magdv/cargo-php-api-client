<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/message/count
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Message;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Message\Responses\MessageCountResponse;

final class CountGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение количества сообщений
     *
     * @return MessageCountResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): MessageCountResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            MessageCountResponse::class,
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
}

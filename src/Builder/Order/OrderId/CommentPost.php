<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/comment
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderCommentRequest;
use Cargomart\ApiClient\Entity\Order\Responses\CommentResponse;

final class CommentPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание комментария
     *
     * @return CommentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderCommentRequest $body): CommentResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            CommentResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}

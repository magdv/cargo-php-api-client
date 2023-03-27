<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/comment/{id}/reply
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Comment\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderCommentReplyRequest;
use Cargomart\ApiClient\Entity\Order\Responses\CommentResponse;

final class ReplyPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Добавление ответа на комментарий
     *
     * @return CommentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderCommentReplyRequest $body): CommentResponse
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

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Comment\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\OrderComment\Requests\OrderCommentReplyRequest;
use Cargomart\ApiClient\Entity\Order\OrderComment\Responses\CommentResponse;

class ReplyPost extends AbstractRequest
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

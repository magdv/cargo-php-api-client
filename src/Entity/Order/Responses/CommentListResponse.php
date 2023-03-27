<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/comment-list-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список комментариев по заказу
 * source: order/responses/comment-list-response.json
 *
 * @property MessageV2[] $message
 * @property CommentListResponseData $data
 */
final class CommentListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\CommentListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

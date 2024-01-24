<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список комментариев по заказу
 * source: order/responses/comment-list-response.json
 *
 * @property CommentListResponseData $data
 */
final class CommentListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\CommentListResponseData']];
    protected static $nullables = ['data' => false];
}

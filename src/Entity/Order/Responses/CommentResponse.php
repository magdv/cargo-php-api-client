<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Комментарий
 * source: order/responses/comment-response.json
 *
 * @property MessageV2[] $message
 * @property CommentResponseData $data
 */
final class CommentResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\CommentResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

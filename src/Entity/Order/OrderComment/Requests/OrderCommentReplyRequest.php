<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderComment\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос с ответом на комментарий
 * source: order/OrderComment/requests/order-comment-reply-request.json
 *
 * @property string $replyText
 */
final class OrderCommentReplyRequest extends AbstractEntity
{
    protected static $types = ['replyText' => ['string']];
    protected static $nullables = ['replyText' => false];
}

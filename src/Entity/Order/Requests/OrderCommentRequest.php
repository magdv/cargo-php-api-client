<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос, в котором есть комментарий к заказу
 * source: order/requests/order-comment-request.json
 *
 * @property string $text
 */
final class OrderCommentRequest extends AbstractEntity
{
    protected static $types = ['text' => ['string']];
    protected static $nullables = ['text' => false];
}

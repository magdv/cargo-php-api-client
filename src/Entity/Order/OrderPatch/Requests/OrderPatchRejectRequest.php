<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderPatch\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для отклонения запроса на изменение заказа
 * source: order/OrderPatch/requests/order-patch-reject-request.json
 *
 * @property string $reason
 */
final class OrderPatchRejectRequest extends AbstractEntity
{
    protected static $types = ['reason' => ['string']];
    protected static $nullables = ['reason' => false];
}

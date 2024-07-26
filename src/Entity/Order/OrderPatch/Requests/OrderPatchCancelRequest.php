<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderPatch\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для отмены запроса на изменение заказа, создателем запроса
 * source: order/OrderPatch/requests/order-patch-cancel-request.json
 *
 * @property string $reason
 */
final class OrderPatchCancelRequest extends AbstractEntity
{
    protected static $types = ['reason' => ['string']];
    protected static $nullables = ['reason' => false];
}

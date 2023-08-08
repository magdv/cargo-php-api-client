<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для отклонения запроса на изменение заказа
 * source: order/requests/order-correction-reject-request.json
 *
 * @property string $reason
 */
final class OrderCorrectionRejectRequest extends AbstractEntity
{
    protected static $types = ['reason' => ['string']];
    protected static $nullables = ['reason' => false];
}

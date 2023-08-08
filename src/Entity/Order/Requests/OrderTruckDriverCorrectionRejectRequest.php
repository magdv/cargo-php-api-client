<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для отклонения запроса на изменение водителя или машины
 * source: order/requests/order-truck-driver-correction-reject-request.json
 *
 * @property string $reason
 */
final class OrderTruckDriverCorrectionRejectRequest extends AbstractEntity
{
    protected static $types = ['reason' => ['string']];
    protected static $nullables = ['reason' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Enums;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация по последнему запросу на изменение водителя или машины.
 * source: order/enums/order-truck-driver-correction-status.json
 *
 * @property string $status
 * @property string $rejectionReason
 */
final class OrderTruckDriverCorrectionStatus extends AbstractEntity
{
    protected static $types = ['status' => ['string'], 'rejectionReason' => ['string']];
    protected static $nullables = ['status' => false, 'rejectionReason' => false];
}

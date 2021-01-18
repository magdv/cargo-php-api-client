<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация по последнему запросу на изменение заказа.
 * source: order/objects/order-correction-status.json
 *
 * @property string $status
 * @property string $rejectionReason
 */
final class OrderCorrectionStatus extends AbstractEntity
{
    protected static $types = ['status' => ['string'], 'rejectionReason' => ['string']];
    protected static $nullables = ['status' => false, 'rejectionReason' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Mixins;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Общие поля решения по претензии о простое по заявке
 * source: order/OrderDowntimeClaim/mixins/OrderDowntimeResponseMixin.json
 *
 * @property \stdClass $orderId
 * @property string $type
 * @property string $status
 * @property \stdClass $reason
 */
final class OrderDowntimeResponseMixin extends AbstractEntity
{
    protected static $types = [
        'orderId' => ['\stdClass'],
        'type' => ['string'],
        'status' => ['string'],
        'reason' => ['\stdClass'],
    ];

    protected static $nullables = ['orderId' => true, 'type' => false, 'status' => false, 'reason' => true];
}

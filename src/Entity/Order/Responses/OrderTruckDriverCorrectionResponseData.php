<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckMode;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType;

/**
 * source: order/responses/order-truck-driver-correction-response.json#/properties/data
 *
 * @property OrderTruckDriverCorrectionResponseDataCorrection $correction
 * @property TruckMode[] $truckMode
 * @property TruckType[] $truckType
 */
final class OrderTruckDriverCorrectionResponseData extends AbstractEntity
{
    protected static $types = [
        'correction' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderTruckDriverCorrectionResponseDataCorrection'],
        'truckMode' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckMode'],
        'truckType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType'],
    ];

    protected static $nullables = ['correction' => false, 'truckMode' => false, 'truckType' => false];
}

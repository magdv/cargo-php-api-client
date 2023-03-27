<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-truck-driver-correction-response.json#/properties/data/properties/correction
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDriver;
use Cargomart\ApiClient\Entity\Order\Objects\OrderTruck;

/**
 * Запрос на изменение машины или водителя
 * source: order/responses/order-truck-driver-correction-response.json#/properties/data/properties/correction
 *
 * @property OrderTruck $truck
 * @property OrderDriver $driver
 * @property string $comment
 * @property string $rejectionReason
 */
final class OrderTruckDriverCorrectionResponseDataCorrection extends AbstractEntity
{
    protected static $types = [
        'truck' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderTruck'],
        'driver' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDriver'],
        'comment' => ['string'],
        'rejectionReason' => ['string'],
    ];

    protected static $nullables = ['truck' => false, 'driver' => false, 'comment' => false, 'rejectionReason' => false];
}

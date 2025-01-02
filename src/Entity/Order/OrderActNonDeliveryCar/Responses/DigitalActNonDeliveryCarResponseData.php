<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects\DigitalActNonDeliveryCar;

/**
 * Ответ с данными акта о неподаче машины
 * source: order/OrderActNonDeliveryCar/responses/OrderActNonDeliveryCarResponse.json#/properties/data
 *
 * @property DigitalActNonDeliveryCar $digitalActNonDeliveryCar
 */
final class DigitalActNonDeliveryCarResponseData extends AbstractEntity
{
    protected static $types = [
        'digitalActNonDeliveryCar' => [
            'Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects\DigitalActNonDeliveryCar',
        ],
    ];

    protected static $nullables = ['digitalActNonDeliveryCar' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект с данными заявки
 * source: order/OrderActNonDeliveryCar/objects/DigitalActNonDeliveryCarOrder.json
 *
 * @property int $serialId
 * @property string $externalId
 * @property string $cargoName
 * @property string $routeName
 * @property string $performStartDate
 */
final class DigitalActNonDeliveryCarOrder extends AbstractEntity
{
    protected static $types = [
        'serialId' => ['int'],
        'externalId' => ['string'],
        'cargoName' => ['string'],
        'routeName' => ['string'],
        'performStartDate' => ['string'],
    ];

    protected static $nullables = [
        'serialId' => false,
        'externalId' => false,
        'cargoName' => false,
        'routeName' => false,
        'performStartDate' => false,
    ];
}

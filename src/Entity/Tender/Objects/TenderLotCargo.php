<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/objects/tender-lot-cargo.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\TemperatureRange;

/**
 * Описание и требования груза
 * source: tender/objects/tender-lot-cargo.json
 *
 * @property int $truckTypeId
 * @property float $weight
 * @property string $type
 * @property TemperatureRange $temperatureRange
 */
final class TenderLotCargo extends AbstractEntity
{
    protected static $types = [
        'truckTypeId' => ['int'],
        'weight' => ['float'],
        'type' => ['string'],
        'temperatureRange' => ['Cargomart\ApiClient\Entity\Base\TemperatureRange'],
    ];

    protected static $nullables = ['truckTypeId' => false, 'weight' => false, 'type' => false, 'temperatureRange' => false];
}

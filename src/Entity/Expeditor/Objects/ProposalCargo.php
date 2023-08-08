<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект с ценами
 * source: expeditor/objects/proposal-cargo.json
 *
 * @property float $weight
 * @property int $capacity
 * @property float $loadWeight
 * @property int $loadCapacity
 * @property string[] $conditions
 * @property string[] $devices
 * @property int $truckType
 * @property \stdClass $temperature
 * @property int[] $loading
 * @property string $description
 */
final class ProposalCargo extends AbstractEntity
{
    protected static $types = [
        'weight' => ['float'],
        'capacity' => ['int'],
        'loadWeight' => ['float'],
        'loadCapacity' => ['int'],
        'conditions' => ['array', 'string'],
        'devices' => ['array', 'string'],
        'truckType' => ['int'],
        'temperature' => ['\stdClass'],
        'loading' => ['array', 'int'],
        'description' => ['string'],
    ];

    protected static $nullables = [
        'weight' => false,
        'capacity' => false,
        'loadWeight' => false,
        'loadCapacity' => false,
        'conditions' => false,
        'devices' => false,
        'truckType' => false,
        'temperature' => true,
        'loading' => false,
        'description' => false,
    ];
}

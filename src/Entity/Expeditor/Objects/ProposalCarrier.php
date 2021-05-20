<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Driver\Models\Driver;
use Cargomart\ApiClient\Entity\Truck\Objects\TruckOld;

/**
 * Перевозчик
 * source: expeditor/objects/proposal-carrier.json
 *
 * @property int $carrierId
 * @property int $status
 * @property int[] $curators
 * @property BankingDetails $bankingDetails
 * @property Driver[] $driver
 * @property TruckOld[] $truck
 * @property Price $price
 */
final class ProposalCarrier extends AbstractEntity
{
    protected static $types = [
        'carrierId' => ['int'],
        'status' => ['int'],
        'curators' => ['array', 'int'],
        'bankingDetails' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\BankingDetails'],
        'driver' => ['array', 'Cargomart\ApiClient\Entity\Driver\Models\Driver'],
        'truck' => ['array', 'Cargomart\ApiClient\Entity\Truck\Objects\TruckOld'],
        'price' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\Price'],
    ];

    protected static $nullables = [
        'carrierId' => false,
        'status' => false,
        'curators' => false,
        'bankingDetails' => false,
        'driver' => false,
        'truck' => false,
        'price' => false,
    ];
}

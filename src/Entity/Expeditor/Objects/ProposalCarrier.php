<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Перевозчик
 * source: expeditor/objects/proposal-carrier.json
 *
 * @property string $carrierId
 * @property int $status
 * @property int[] $curators
 * @property BankingDetails $bankingDetails
 * @property ProposalDriver $driver
 * @property ProposalTruck $truck
 * @property Price $price
 */
final class ProposalCarrier extends AbstractEntity
{
    protected static $types = [
        'carrierId' => ['string'],
        'status' => ['int'],
        'curators' => ['array', 'int'],
        'bankingDetails' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\BankingDetails'],
        'driver' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalDriver'],
        'truck' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalTruck'],
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

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateTimeRange;

/**
 * Полная информация по заказу Экспедитора
 * source: expeditor/objects/proposal-card-full.json
 *
 * @property string $id
 * @property int $serialId
 * @property int $customerId
 * @property int[] $curators
 * @property Price $price
 * @property int $status
 * @property DateTimeRange $searchRange
 * @property ProposalCargo $cargo
 * @property ProposalCarrier $carrier
 * @property ProposalPoint[] $route
 * @property ProposalAccess $access
 */
final class ProposalCardFull extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'serialId' => ['int'],
        'customerId' => ['int'],
        'curators' => ['array', 'int'],
        'price' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\Price'],
        'status' => ['int'],
        'searchRange' => ['Cargomart\ApiClient\Entity\Base\DateTimeRange'],
        'cargo' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalCargo'],
        'carrier' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalCarrier'],
        'route' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalPoint'],
        'access' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'serialId' => false,
        'customerId' => false,
        'curators' => false,
        'price' => false,
        'status' => false,
        'searchRange' => false,
        'cargo' => false,
        'carrier' => false,
        'route' => false,
        'access' => false,
    ];
}

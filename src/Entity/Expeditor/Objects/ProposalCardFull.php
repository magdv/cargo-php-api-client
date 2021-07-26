<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateTimeRange;
use Cargomart\ApiClient\Entity\Order\Objects\OrderPatchLastItem;

/**
 * Полная информация по заказу Экспедитора
 * source: expeditor/objects/proposal-card-full.json
 *
 * @property string $id
 * @property int $serialId
 * @property string $customerId
 * @property int[] $curators
 * @property string $expeditorId
 * @property Price $price
 * @property int $status
 * @property DateTimeRange $searchRange
 * @property ProposalCargo $cargo
 * @property ProposalCarrier $carrier
 * @property ProposalPoint[] $route
 * @property ExpeditorContract $expeditorContract
 * @property OrderPatchLastItem $lastPatch
 * @property string $externalId
 * @property int $customerBranchId
 * @property string $comment
 * @property string[] $tag
 * @property ProposalAccess $access
 * @property ProposalProxy $proxy
 */
final class ProposalCardFull extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'serialId' => ['int'],
        'customerId' => ['string'],
        'curators' => ['array', 'int'],
        'expeditorId' => ['string'],
        'price' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\Price'],
        'status' => ['int'],
        'searchRange' => ['Cargomart\ApiClient\Entity\Base\DateTimeRange'],
        'cargo' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalCargo'],
        'carrier' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalCarrier'],
        'route' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalPoint'],
        'expeditorContract' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ExpeditorContract'],
        'lastPatch' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchLastItem'],
        'externalId' => ['string'],
        'customerBranchId' => ['int'],
        'comment' => ['string'],
        'tag' => ['array', 'string'],
        'access' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalAccess'],
        'proxy' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ProposalProxy'],
    ];

    protected static $nullables = [
        'id' => false,
        'serialId' => false,
        'customerId' => false,
        'curators' => false,
        'expeditorId' => false,
        'price' => false,
        'status' => false,
        'searchRange' => false,
        'cargo' => false,
        'carrier' => false,
        'route' => false,
        'expeditorContract' => false,
        'lastPatch' => false,
        'externalId' => false,
        'customerBranchId' => false,
        'comment' => false,
        'tag' => false,
        'access' => false,
        'proxy' => false,
    ];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Claim\Mixins;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\PriceValue;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;

/**
 * Набор общих полей требования на оплату
 * source: claim/mixins/ClaimCommonMixin.json
 *
 * @property \stdClass $id
 * @property string $number
 * @property string $date
 * @property int $serialId
 * @property string $orderId
 * @property CompanyShort $consignor
 * @property CompanyShort $carrier
 * @property PriceValue $penaltySum
 * @property string $status
 * @property string $claimant
 * @property string $respondent
 */
final class ClaimCommonMixin extends AbstractEntity
{
    protected static $types = [
        'id' => ['\stdClass'],
        'number' => ['string'],
        'date' => ['string'],
        'serialId' => ['int'],
        'orderId' => ['string'],
        'consignor' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'carrier' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'penaltySum' => ['Cargomart\ApiClient\Entity\Base\PriceValue'],
        'status' => ['string'],
        'claimant' => ['string'],
        'respondent' => ['string'],
    ];

    protected static $nullables = [
        'id' => true,
        'number' => false,
        'date' => false,
        'serialId' => false,
        'orderId' => false,
        'consignor' => false,
        'carrier' => false,
        'penaltySum' => false,
        'status' => false,
        'claimant' => false,
        'respondent' => false,
    ];
}

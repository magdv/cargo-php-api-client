<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderAccess;
use Cargomart\ApiClient\Entity\Order\Objects\OrderQualityScoreByCarrier;
use Cargomart\ApiClient\Entity\Order\Objects\OrderQualityScoreByConsignor;

/**
 * source: order/responses/order-quality-score-response.json#/properties/data#/properties/order
 *
 * @property string $id
 * @property string $qualityScoreStatusByConsignor
 * @property string $qualityScoreStatusByCarrier
 * @property OrderQualityScoreByConsignor $qualityScoreByConsignor
 * @property OrderQualityScoreByCarrier $qualityScoreByCarrier
 * @property OrderAccess $access
 */
final class OrderQualityScoreResponseDataOrder extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'qualityScoreStatusByConsignor' => ['string'],
        'qualityScoreStatusByCarrier' => ['string'],
        'qualityScoreByConsignor' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderQualityScoreByConsignor'],
        'qualityScoreByCarrier' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderQualityScoreByCarrier'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'qualityScoreStatusByConsignor' => true,
        'qualityScoreStatusByCarrier' => true,
        'qualityScoreByConsignor' => false,
        'qualityScoreByCarrier' => false,
        'access' => false,
    ];
}

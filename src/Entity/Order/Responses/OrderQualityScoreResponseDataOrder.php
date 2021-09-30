<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderAccess;

/**
 * source: order/responses/order-quality-score-response.json#/properties/data#/properties/order
 *
 * @property string $id
 * @property \stdClass $qualityScoreStatusByConsignor
 * @property \stdClass $qualityScoreStatusByCarrier
 * @property \stdClass $qualityScoreByConsignor
 * @property \stdClass $qualityScoreByCarrier
 * @property OrderAccess $access
 */
final class OrderQualityScoreResponseDataOrder extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'qualityScoreStatusByConsignor' => ['\stdClass'],
        'qualityScoreStatusByCarrier' => ['\stdClass'],
        'qualityScoreByConsignor' => ['\stdClass'],
        'qualityScoreByCarrier' => ['\stdClass'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'qualityScoreStatusByConsignor' => true,
        'qualityScoreStatusByCarrier' => true,
        'qualityScoreByConsignor' => true,
        'qualityScoreByCarrier' => true,
        'access' => false,
    ];
}

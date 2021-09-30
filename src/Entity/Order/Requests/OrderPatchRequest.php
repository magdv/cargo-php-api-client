<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для создания запроса на изменение заказа
 * source: order/requests/order-patch-request.json
 *
 * @property string $consignorPrice
 * @property string $carrierPrice
 * @property int $companyBranchId
 * @property string $cargoType
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property float $loadWeight
 * @property int $loadCapacity
 * @property \stdClass $temperature
 * @property string[] $device
 * @property string[] $conditions
 * @property \stdClass $comment
 * @property OrderPatchPatchRequest[] $points
 * @property string $externalId
 * @property string[] $tag
 * @property string $commentForConsignor
 * @property \stdClass $commentForCarrier
 */
final class OrderPatchRequest extends AbstractEntity
{
    protected static $types = [
        'consignorPrice' => ['string'],
        'carrierPrice' => ['string'],
        'companyBranchId' => ['int'],
        'cargoType' => ['string'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'loadWeight' => ['float'],
        'loadCapacity' => ['int'],
        'temperature' => ['\stdClass'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'comment' => ['\stdClass'],
        'points' => ['array', 'Cargomart\ApiClient\Entity\Order\Requests\OrderPatchPatchRequest'],
        'externalId' => ['string'],
        'tag' => ['array', 'string'],
        'commentForConsignor' => ['string'],
        'commentForCarrier' => ['\stdClass'],
    ];

    protected static $nullables = [
        'consignorPrice' => false,
        'carrierPrice' => false,
        'companyBranchId' => false,
        'cargoType' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'loadWeight' => false,
        'loadCapacity' => false,
        'temperature' => true,
        'device' => false,
        'conditions' => false,
        'comment' => true,
        'points' => false,
        'externalId' => false,
        'tag' => false,
        'commentForConsignor' => false,
        'commentForCarrier' => true,
    ];
}
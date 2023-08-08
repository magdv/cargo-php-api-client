<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для создания запроса на изменение заказа отправителем
 * source: order/requests/order-customer-patch-request.json
 *
 * @property string $consignorPrice
 * @property int $companyBranchId
 * @property int $truckTypeId
 * @property string $cargoType
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property float $loadWeight
 * @property int $loadCapacity
 * @property \stdClass $temperature
 * @property int[] $loading
 * @property string[] $device
 * @property string[] $conditions
 * @property string $comment
 * @property OrderPatchPointRequest[] $points
 * @property string $externalId
 * @property string[] $tag
 * @property string $commentForCarrier
 */
final class OrderCustomerPatchRequest extends AbstractEntity
{
    protected static $types = [
        'consignorPrice' => ['string'],
        'companyBranchId' => ['int'],
        'truckTypeId' => ['int'],
        'cargoType' => ['string'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'loadWeight' => ['float'],
        'loadCapacity' => ['int'],
        'temperature' => ['\stdClass'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'comment' => ['string'],
        'points' => ['array', 'Cargomart\ApiClient\Entity\Order\Requests\OrderPatchPointRequest'],
        'externalId' => ['string'],
        'tag' => ['array', 'string'],
        'commentForCarrier' => ['string'],
    ];

    protected static $nullables = [
        'consignorPrice' => false,
        'companyBranchId' => false,
        'truckTypeId' => false,
        'cargoType' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'loadWeight' => false,
        'loadCapacity' => false,
        'temperature' => true,
        'loading' => false,
        'device' => false,
        'conditions' => false,
        'comment' => false,
        'points' => false,
        'externalId' => false,
        'tag' => false,
        'commentForCarrier' => false,
    ];
}

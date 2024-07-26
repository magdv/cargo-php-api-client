<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderPatch\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDraftRoutePoint;

/**
 * Данные для создания запроса на изменение заказа отправителем
 * source: order/OrderPatch/requests/order-customer-patch-request.json
 *
 * @property string $consignorPrice
 * @property string $currencyCode
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
 * @property OrderDraftRoutePoint[] $points
 * @property string $externalId
 * @property string[] $tag
 * @property string $commentForCarrier
 */
final class OrderCustomerPatchRequest extends AbstractEntity
{
    protected static $types = [
        'consignorPrice' => ['string'],
        'currencyCode' => ['string'],
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
        'points' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderDraftRoutePoint'],
        'externalId' => ['string'],
        'tag' => ['array', 'string'],
        'commentForCarrier' => ['string'],
    ];

    protected static $nullables = [
        'consignorPrice' => false,
        'currencyCode' => false,
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

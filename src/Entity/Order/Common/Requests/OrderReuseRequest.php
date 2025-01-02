<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftExpeditorBidding;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderReusePoint;

/**
 * Запрос на экспедиторское переразмещение заказа отправителя.
 * source: order/Common/requests/order-reuse-request.json
 *
 * @property OrderReusePoint[] $routePoint
 * @property int $companyBranchId
 * @property int $truckTypeId
 * @property \stdClass $temperature
 * @property string[] $device
 * @property string[] $conditions
 * @property string $cargoType
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property float $loadWeight
 * @property int $loadCapacity
 * @property int[] $loading
 * @property string $carriageDetail
 * @property string $priceStrategyType
 * @property string $biddingType
 * @property OrderDraftExpeditorBidding $bidding
 * @property string $price
 * @property int[] $contact
 * @property string[] $tag
 */
final class OrderReuseRequest extends AbstractEntity
{
    protected static $types = [
        'routePoint' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\OrderReusePoint'],
        'companyBranchId' => ['int'],
        'truckTypeId' => ['int'],
        'temperature' => ['\stdClass'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'cargoType' => ['string'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'loadWeight' => ['float'],
        'loadCapacity' => ['int'],
        'loading' => ['array', 'int'],
        'carriageDetail' => ['string'],
        'priceStrategyType' => ['string'],
        'biddingType' => ['string'],
        'bidding' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftExpeditorBidding'],
        'price' => ['string'],
        'contact' => ['array', 'int'],
        'tag' => ['array', 'string'],
    ];

    protected static $nullables = [
        'routePoint' => false,
        'companyBranchId' => false,
        'truckTypeId' => false,
        'temperature' => true,
        'device' => false,
        'conditions' => false,
        'cargoType' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'loadWeight' => false,
        'loadCapacity' => false,
        'loading' => false,
        'carriageDetail' => false,
        'priceStrategyType' => false,
        'biddingType' => false,
        'bidding' => false,
        'price' => false,
        'contact' => false,
        'tag' => false,
    ];
}

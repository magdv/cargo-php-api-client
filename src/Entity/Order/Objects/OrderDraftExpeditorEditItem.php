<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Полная информация по черновику заказа
 * source: order/objects/order-draft-expeditor-edit-item.json
 *
 * @property string $id
 * @property string $orderId
 * @property int $serialId
 * @property int $statusId
 * @property int $extStatusId
 * @property int $version
 * @property string $carriageDetail
 * @property string $consignorId
 * @property int $companyBranchId
 * @property int[] $contact
 * @property string $externalId
 * @property OrderDraftFtlPoint[] $routePoint
 * @property int $truckTypeId
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property float $loadWeight
 * @property int $loadCapacity
 * @property string $cargoType
 * @property TemperatureRange $temperature
 * @property int[] $loading
 * @property string[] $device
 * @property string[] $conditions
 * @property int $paymentTypeId
 * @property string $paymentDetail
 * @property string $currencyCode
 * @property string $price
 * @property float $vatRate
 * @property string[] $tag
 * @property OrderDraftFtlAccess $access
 */
final class OrderDraftExpeditorEditItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'orderId' => ['string'],
        'serialId' => ['int'],
        'statusId' => ['int'],
        'extStatusId' => ['int'],
        'version' => ['int'],
        'carriageDetail' => ['string'],
        'consignorId' => ['string'],
        'companyBranchId' => ['int'],
        'contact' => ['array', 'int'],
        'externalId' => ['string'],
        'routePoint' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderDraftFtlPoint'],
        'truckTypeId' => ['int'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'loadWeight' => ['float'],
        'loadCapacity' => ['int'],
        'cargoType' => ['string'],
        'temperature' => ['Cargomart\ApiClient\Entity\Order\Objects\TemperatureRange'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'paymentTypeId' => ['int'],
        'paymentDetail' => ['string'],
        'currencyCode' => ['string'],
        'price' => ['string'],
        'vatRate' => ['float'],
        'tag' => ['array', 'string'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDraftFtlAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'orderId' => false,
        'serialId' => false,
        'statusId' => false,
        'extStatusId' => false,
        'version' => false,
        'carriageDetail' => false,
        'consignorId' => false,
        'companyBranchId' => false,
        'contact' => false,
        'externalId' => false,
        'routePoint' => false,
        'truckTypeId' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'loadWeight' => false,
        'loadCapacity' => false,
        'cargoType' => false,
        'temperature' => false,
        'loading' => false,
        'device' => false,
        'conditions' => false,
        'paymentTypeId' => false,
        'paymentDetail' => false,
        'currencyCode' => false,
        'price' => false,
        'vatRate' => false,
        'tag' => false,
        'access' => false,
    ];
}

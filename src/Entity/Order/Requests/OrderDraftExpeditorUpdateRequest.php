<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDraftFtlPoint;
use Cargomart\ApiClient\Entity\Order\Objects\TemperatureRange;

/**
 * Данные для редактирования объекта заказа
 * source: order/requests/order-draft-expeditor-update-request.json
 *
 * @property int $version
 * @property string $carriageDetail
 * @property string $externalId
 * @property OrderDraftFtlPoint[] $routePoint
 * @property int $truckTypeId
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property float $loadWeight
 * @property int $loadCapacity
 * @property string $cargoType
 * @property string $price
 * @property float $vatRate
 * @property TemperatureRange $temperature
 * @property int[] $loading
 * @property string[] $device
 * @property string[] $conditions
 * @property string $paymentDetail
 * @property int $companyBranchId
 * @property int[] $contact
 * @property string[] $tag
 */
final class OrderDraftExpeditorUpdateRequest extends AbstractEntity
{
    protected static $types = [
        'version' => ['int'],
        'carriageDetail' => ['string'],
        'externalId' => ['string'],
        'routePoint' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderDraftFtlPoint'],
        'truckTypeId' => ['int'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'loadWeight' => ['float'],
        'loadCapacity' => ['int'],
        'cargoType' => ['string'],
        'price' => ['string'],
        'vatRate' => ['float'],
        'temperature' => ['Cargomart\ApiClient\Entity\Order\Objects\TemperatureRange'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'paymentDetail' => ['string'],
        'companyBranchId' => ['int'],
        'contact' => ['array', 'int'],
        'tag' => ['array', 'string'],
    ];

    protected static $nullables = [
        'version' => false,
        'carriageDetail' => false,
        'externalId' => false,
        'routePoint' => false,
        'truckTypeId' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'loadWeight' => false,
        'loadCapacity' => false,
        'cargoType' => false,
        'price' => false,
        'vatRate' => false,
        'temperature' => false,
        'loading' => false,
        'device' => false,
        'conditions' => false,
        'paymentDetail' => false,
        'companyBranchId' => false,
        'contact' => false,
        'tag' => false,
    ];
}

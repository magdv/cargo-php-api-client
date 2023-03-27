<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tms/objects/booking-draft-order.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\TemperatureRange;

/**
 * Заявка резервирование - заказ
 * source: tms/objects/booking-draft-order.json
 *
 * @property int $companyBranchId
 * @property string $externalId
 * @property BookingDraftOrderPoint[] $route
 * @property string $cargoType
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property int $truckType
 * @property TemperatureRange $temperature
 * @property int[] $loading
 * @property string[] $device
 * @property string[] $conditions
 * @property string $price
 * @property string $currencyCode
 * @property float $vatRate
 * @property string $comment
 * @property int $paymentTypeId
 * @property string $paymentDetail
 * @property string $consignorId
 * @property string $carrierId
 * @property int[] $contact
 * @property string[] $tags
 */
final class BookingDraftOrder extends AbstractEntity
{
    protected static $types = [
        'companyBranchId' => ['int'],
        'externalId' => ['string'],
        'route' => ['array', 'Cargomart\ApiClient\Entity\Tms\Objects\BookingDraftOrderPoint'],
        'cargoType' => ['string'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'truckType' => ['int'],
        'temperature' => ['Cargomart\ApiClient\Entity\Base\TemperatureRange'],
        'loading' => ['array', 'int'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
        'price' => ['string'],
        'currencyCode' => ['string'],
        'vatRate' => ['float'],
        'comment' => ['string'],
        'paymentTypeId' => ['int'],
        'paymentDetail' => ['string'],
        'consignorId' => ['string'],
        'carrierId' => ['string'],
        'contact' => ['array', 'int'],
        'tags' => ['array', 'string'],
    ];

    protected static $nullables = [
        'companyBranchId' => false,
        'externalId' => false,
        'route' => false,
        'cargoType' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'truckType' => false,
        'temperature' => false,
        'loading' => false,
        'device' => false,
        'conditions' => false,
        'price' => false,
        'currencyCode' => false,
        'vatRate' => false,
        'comment' => false,
        'paymentTypeId' => false,
        'paymentDetail' => false,
        'consignorId' => false,
        'carrierId' => false,
        'contact' => false,
        'tags' => false,
    ];
}

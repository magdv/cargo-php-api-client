<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tms/requests/booking-publish-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\TemperatureRange;

/**
 * Запрос на создание бронирования
 * source: tms/requests/booking-publish-request.json
 *
 * @property int $companyBranchId
 * @property string $externalId
 * @property \stdClass[] $route
 * @property string $cargoType
 * @property float $cargoWeight
 * @property int $cargoCapacity
 * @property int $truckType
 * @property TemperatureRange $temperature
 * @property int[] $loading
 * @property float $vatRate
 * @property string $comment
 * @property int $paymentTypeId
 * @property string[] $device
 * @property string[] $conditions
 * @property int[] $contact
 * @property string[] $tags
 */
final class BookingPublishRequest extends AbstractEntity
{
    protected static $types = [
        'companyBranchId' => ['int'],
        'externalId' => ['string'],
        'route' => ['array', '\stdClass'],
        'cargoType' => ['string'],
        'cargoWeight' => ['float'],
        'cargoCapacity' => ['int'],
        'truckType' => ['int'],
        'temperature' => ['Cargomart\ApiClient\Entity\Base\TemperatureRange'],
        'loading' => ['array', 'int'],
        'vatRate' => ['float'],
        'comment' => ['string'],
        'paymentTypeId' => ['int'],
        'device' => ['array', 'string'],
        'conditions' => ['array', 'string'],
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
        'vatRate' => false,
        'comment' => false,
        'paymentTypeId' => false,
        'device' => false,
        'conditions' => false,
        'contact' => false,
        'tags' => false,
    ];
}

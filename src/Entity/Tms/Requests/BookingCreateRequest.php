<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на резервирование бронирования
 * source: tms/requests/booking-create-request.json
 *
 * @property string $date
 * @property string $departureCode
 * @property string $destinationCode
 * @property int $truckType
 * @property string $orderType
 * @property string $price
 * @property string $currencyCode
 * @property string $carrierId
 * @property int $travelTime
 */
final class BookingCreateRequest extends AbstractEntity
{
    protected static $types = [
        'date' => ['string'],
        'departureCode' => ['string'],
        'destinationCode' => ['string'],
        'truckType' => ['int'],
        'orderType' => ['string'],
        'price' => ['string'],
        'currencyCode' => ['string'],
        'carrierId' => ['string'],
        'travelTime' => ['int'],
    ];

    protected static $nullables = [
        'date' => false,
        'departureCode' => false,
        'destinationCode' => false,
        'truckType' => false,
        'orderType' => false,
        'price' => false,
        'currencyCode' => false,
        'carrierId' => false,
        'travelTime' => false,
    ];
}

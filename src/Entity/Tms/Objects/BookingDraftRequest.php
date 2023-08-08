<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Начальные условия запрос пользователя бронирования
 * source: tms/objects/booking-draft-request.json
 *
 * @property string $date
 * @property string $departureCode
 * @property string $destinationCode
 * @property int $truckType
 * @property string $carrierId
 */
final class BookingDraftRequest extends AbstractEntity
{
    protected static $types = [
        'date' => ['string'],
        'departureCode' => ['string'],
        'destinationCode' => ['string'],
        'truckType' => ['int'],
        'carrierId' => ['string'],
    ];

    protected static $nullables = [
        'date' => false,
        'departureCode' => false,
        'destinationCode' => false,
        'truckType' => false,
        'carrierId' => false,
    ];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Профиль пользователя
 * source: user/requests/user-profile-request.json
 *
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $position
 * @property string $contactPhone
 * @property string $contactPhoneExt
 * @property string $timezone
 */
final class UserProfileRequest extends AbstractEntity
{
    protected static $types = [
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'position' => ['string'],
        'contactPhone' => ['string'],
        'contactPhoneExt' => ['string'],
        'timezone' => ['string'],
    ];

    protected static $nullables = [
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'position' => false,
        'contactPhone' => false,
        'contactPhoneExt' => false,
        'timezone' => false,
    ];
}

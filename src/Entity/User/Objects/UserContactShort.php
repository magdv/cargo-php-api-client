<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Контактная информация
 * source: user/objects/user-contact-short.json
 *
 * @property int $id
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $email
 * @property string $position
 * @property string $contactPhone
 * @property string $companyId
 */
final class UserContactShort extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'email' => ['string'],
        'position' => ['string'],
        'contactPhone' => ['string'],
        'companyId' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'email' => false,
        'position' => false,
        'contactPhone' => false,
        'companyId' => false,
    ];
}

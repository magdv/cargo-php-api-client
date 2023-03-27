<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company-confirmation/objects/owner.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект владельца компании в валидации
 * source: company-confirmation/objects/owner.json
 *
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $email
 * @property string $contactPhone
 * @property string $createDate
 */
final class Owner extends AbstractEntity
{
    protected static $types = [
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'email' => ['string'],
        'contactPhone' => ['string'],
        'createDate' => ['string'],
    ];

    protected static $nullables = [
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'email' => false,
        'contactPhone' => false,
        'createDate' => false,
    ];
}

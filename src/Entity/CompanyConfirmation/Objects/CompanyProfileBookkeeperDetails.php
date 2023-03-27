<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company-confirmation/objects/company-profile.json#/properties/bookkeeperDetails
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Контакт бухгалтера
 * source: company-confirmation/objects/company-profile.json#/properties/bookkeeperDetails
 *
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $phone
 * @property string $email
 */
final class CompanyProfileBookkeeperDetails extends AbstractEntity
{
    protected static $types = [
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'phone' => ['string'],
        'email' => ['string'],
    ];

    protected static $nullables = [
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'phone' => false,
        'email' => false,
    ];
}

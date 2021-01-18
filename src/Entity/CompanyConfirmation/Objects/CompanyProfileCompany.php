<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные компании
 * source: company-confirmation/objects/company-profile.json#/properties/company
 *
 * @property string $phone
 * @property string $email
 * @property string $actualAddress
 * @property string $url
 * @property string $taxSystem
 */
final class CompanyProfileCompany extends AbstractEntity
{
    protected static $types = [
        'phone' => ['string'],
        'email' => ['string'],
        'actualAddress' => ['string'],
        'url' => ['string'],
        'taxSystem' => ['string'],
    ];

    protected static $nullables = [
        'phone' => false,
        'email' => false,
        'actualAddress' => false,
        'url' => false,
        'taxSystem' => false,
    ];
}

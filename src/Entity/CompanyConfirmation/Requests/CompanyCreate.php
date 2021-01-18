<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос установки данных компании
 * source: company-confirmation/requests/company-create.json
 *
 * @property string $inn
 * @property string $countryCode
 * @property string $companyName
 * @property string $activityTypeId
 */
final class CompanyCreate extends AbstractEntity
{
    protected static $types = [
        'inn' => ['string'],
        'countryCode' => ['string'],
        'companyName' => ['string'],
        'activityTypeId' => ['string'],
    ];

    protected static $nullables = [
        'inn' => false,
        'countryCode' => false,
        'companyName' => false,
        'activityTypeId' => false,
    ];
}

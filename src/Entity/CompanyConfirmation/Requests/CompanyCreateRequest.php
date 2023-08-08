<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос установки данных компании
 * source: company-confirmation/requests/company-create-request.json
 *
 * @property string $inn
 * @property string $countryCode
 * @property string $companyName
 * @property int $activityTypeId
 */
final class CompanyCreateRequest extends AbstractEntity
{
    protected static $types = [
        'inn' => ['string'],
        'countryCode' => ['string'],
        'companyName' => ['string'],
        'activityTypeId' => ['int'],
    ];

    protected static $nullables = [
        'inn' => false,
        'countryCode' => false,
        'companyName' => false,
        'activityTypeId' => false,
    ];
}

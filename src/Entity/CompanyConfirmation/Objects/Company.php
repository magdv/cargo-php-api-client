<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Экспортная информация по компании для заказ
 * source: company-confirmation/objects/company.json
 *
 * @property string $role
 * @property string $shortName
 * @property string $legalAddress
 * @property string $headName
 * @property string $inn
 * @property string $ogrn
 * @property string $countryCode
 * @property string $taxSystem
 * @property bool $isNotTaxReturnDate
 * @property int $activityTypeId
 * @property string $createDate
 * @property int $legalStatusId
 */
final class Company extends AbstractEntity
{
    protected static $types = [
        'role' => ['string'],
        'shortName' => ['string'],
        'legalAddress' => ['string'],
        'headName' => ['string'],
        'inn' => ['string'],
        'ogrn' => ['string'],
        'countryCode' => ['string'],
        'taxSystem' => ['string'],
        'isNotTaxReturnDate' => ['bool'],
        'activityTypeId' => ['int'],
        'createDate' => ['string'],
        'legalStatusId' => ['int'],
    ];

    protected static $nullables = [
        'role' => false,
        'shortName' => false,
        'legalAddress' => false,
        'headName' => false,
        'inn' => false,
        'ogrn' => false,
        'countryCode' => false,
        'taxSystem' => false,
        'isNotTaxReturnDate' => false,
        'activityTypeId' => false,
        'createDate' => false,
        'legalStatusId' => false,
    ];
}

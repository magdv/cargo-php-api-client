<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о дочерней компании
 * source: company/objects/company-branch.json
 *
 * @property int $id
 * @property string $uuid
 * @property string $companyId
 * @property string $title
 * @property string $legalAddress
 * @property string $inn
 * @property string $kpp
 * @property bool $isWithVat
 * @property bool $isMain
 * @property string $fullTitle
 * @property string $phone
 * @property int $legalForm
 * @property string $countryCode
 */
final class CompanyBranch extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'uuid' => ['string'],
        'companyId' => ['string'],
        'title' => ['string'],
        'legalAddress' => ['string'],
        'inn' => ['string'],
        'kpp' => ['string'],
        'isWithVat' => ['bool'],
        'isMain' => ['bool'],
        'fullTitle' => ['string'],
        'phone' => ['string'],
        'legalForm' => ['int'],
        'countryCode' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'uuid' => false,
        'companyId' => false,
        'title' => false,
        'legalAddress' => false,
        'inn' => false,
        'kpp' => false,
        'isWithVat' => false,
        'isMain' => false,
        'fullTitle' => false,
        'phone' => false,
        'legalForm' => false,
        'countryCode' => false,
    ];
}

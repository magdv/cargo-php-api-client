<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/objects/company-branch.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о дочерней компании
 * source: company/objects/company-branch.json
 *
 * @property int $id
 * @property string $companyId
 * @property string $title
 * @property string $legalAddress
 * @property string $inn
 * @property string $kpp
 * @property bool $isWithVat
 * @property bool $isMain
 */
final class CompanyBranch extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'companyId' => ['string'],
        'title' => ['string'],
        'legalAddress' => ['string'],
        'inn' => ['string'],
        'kpp' => ['string'],
        'isWithVat' => ['bool'],
        'isMain' => ['bool'],
    ];

    protected static $nullables = [
        'id' => false,
        'companyId' => false,
        'title' => false,
        'legalAddress' => false,
        'inn' => false,
        'kpp' => false,
        'isWithVat' => false,
        'isMain' => false,
    ];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект рекламируемого филиала компании
 * source: company/objects/company-branch-highlighted.json
 *
 * @property CompanyOtherShort $company
 * @property int $companyBranchId
 * @property CompanyBranchConsignorBranchParamAdvertiseSettings $advertiseSettings
 * @property CarriageDirection[] $directions
 * @property int[] $truckTypeIds
 */
final class CompanyBranchHighlighted extends AbstractEntity
{
    protected static $types = [
        'company' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyOtherShort'],
        'companyBranchId' => ['int'],
        'advertiseSettings' => [
            'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranchConsignorBranchParamAdvertiseSettings',
        ],
        'directions' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CarriageDirection'],
        'truckTypeIds' => ['array', 'int'],
    ];

    protected static $nullables = [
        'company' => false,
        'companyBranchId' => false,
        'advertiseSettings' => false,
        'directions' => false,
        'truckTypeIds' => false,
    ];
}

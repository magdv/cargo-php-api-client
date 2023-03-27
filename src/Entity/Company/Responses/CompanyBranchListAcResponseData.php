<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/company-branch-list-ac-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyBranchAc;

/**
 * source: company/responses/company-branch-list-ac-response.json#/properties/data
 *
 * @property CompanyBranchAc[] $companyBranch
 * @property Pagination $pagination
 */
final class CompanyBranchListAcResponseData extends AbstractEntity
{
    protected static $types = [
        'companyBranch' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranchAc'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['companyBranch' => false, 'pagination' => false];
}

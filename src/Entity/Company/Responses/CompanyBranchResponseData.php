<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/company-branch-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch;

/**
 * source: company/responses/company-branch-response.json#/properties/data
 *
 * @property CompanyBranch[] $companyBranch
 */
final class CompanyBranchResponseData extends AbstractEntity
{
    protected static $types = ['companyBranch' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch']];
    protected static $nullables = ['companyBranch' => false];
}

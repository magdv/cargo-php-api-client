<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyBranchHighlighted;

/**
 * source: company/responses/company-branch-highlighted-response.json#/properties/data
 *
 * @property CompanyBranchHighlighted[] $companyBranchHighlighted
 */
final class CompanyBranchHighlightedResponseData extends AbstractEntity
{
    protected static $types = [
        'companyBranchHighlighted' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranchHighlighted'],
    ];

    protected static $nullables = ['companyBranchHighlighted' => false];
}

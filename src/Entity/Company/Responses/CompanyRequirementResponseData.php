<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/company-requirement-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Common response data
 * source: company/responses/company-requirement-response.json#/properties/data
 *
 * @property CompanyRequirementResponseDataCompany $company
 */
final class CompanyRequirementResponseData extends AbstractEntity
{
    protected static $types = [
        'company' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyRequirementResponseDataCompany'],
    ];

    protected static $nullables = ['company' => false];
}

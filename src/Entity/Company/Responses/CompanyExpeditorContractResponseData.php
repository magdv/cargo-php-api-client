<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/company-expeditor-contract-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyExpeditorContract;

/**
 * Список экспедиторских договоров
 * source: company/responses/company-expeditor-contract-response.json#/properties/data
 *
 * @property CompanyBranch[] $companyBranch
 * @property CompanyExpeditorContract[] $contract
 */
final class CompanyExpeditorContractResponseData extends AbstractEntity
{
    protected static $types = [
        'companyBranch' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch'],
        'contract' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyExpeditorContract'],
    ];

    protected static $nullables = ['companyBranch' => false, 'contract' => false];
}

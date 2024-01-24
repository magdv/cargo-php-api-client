<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список дочерних компаний
 * source: company/responses/company-branch-response.json
 *
 * @property CompanyBranchResponseData $data
 */
final class CompanyBranchResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyBranchResponseData']];
    protected static $nullables = ['data' => false];
}

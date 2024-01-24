<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список дочерних компаний для автокомплита
 * source: company/responses/company-branch-list-ac-response.json
 *
 * @property CompanyBranchListAcResponseData $data
 */
final class CompanyBranchListAcResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyBranchListAcResponseData']];
    protected static $nullables = ['data' => false];
}

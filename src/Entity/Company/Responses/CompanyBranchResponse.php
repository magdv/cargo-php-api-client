<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список дочерних компаний
 * source: company/responses/company-branch-response.json
 *
 * @property MessageV2[] $message
 * @property CompanyBranchResponseData $data
 */
final class CompanyBranchResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyBranchResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список рекламируемых дочерних компаний
 * source: company/responses/company-branch-highlighted-response.json
 *
 * @property CompanyBranchHighlightedResponseData $data
 */
final class CompanyBranchHighlightedResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyBranchHighlightedResponseData'],
    ];

    protected static $nullables = ['data' => false];
}

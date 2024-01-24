<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список рекламируемых дочерних компаний
 * source: company/responses/company-branch-highlighted-response.json
 *
 * @property CompanyBranchHighlightedResponseData $data
 * @property MessageV2[] $message
 */
final class CompanyBranchHighlightedResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyBranchHighlightedResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}

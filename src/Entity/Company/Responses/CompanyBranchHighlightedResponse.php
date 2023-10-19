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
 * @property MessageV2[] $message
 * @property CompanyBranchHighlightedResponseData $data
 */
final class CompanyBranchHighlightedResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyBranchHighlightedResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

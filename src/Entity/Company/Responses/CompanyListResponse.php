<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список компаний, возвращаемых в результате поиска
 * source: company/responses/company-list-response.json
 *
 * @property CompanyListResponseData $data
 */
final class CompanyListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyListResponseData']];
    protected static $nullables = ['data' => false];
}

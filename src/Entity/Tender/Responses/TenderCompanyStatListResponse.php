<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ статистики по списку компаний
 * source: tender/responses/tender-company-stat-list-response.json
 *
 * @property TenderCompanyStatListResponseData $data
 */
final class TenderCompanyStatListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderCompanyStatListResponseData']];
    protected static $nullables = ['data' => false];
}

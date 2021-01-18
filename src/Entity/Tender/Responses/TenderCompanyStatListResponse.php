<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ статистики по списку компаний
 * source: tender/responses/tender-company-stat-list-response.json
 *
 * @property MessageV2[] $message
 * @property TenderCompanyStatListResponseData $data
 */
final class TenderCompanyStatListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderCompanyStatListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

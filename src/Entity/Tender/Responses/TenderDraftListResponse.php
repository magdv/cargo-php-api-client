<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ со списком черновиков тендера
 * source: tender/responses/tender-draft-list-response.json
 *
 * @property MessageV2[] $message
 * @property TenderDraftListResponseData $data
 */
final class TenderDraftListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderDraftListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

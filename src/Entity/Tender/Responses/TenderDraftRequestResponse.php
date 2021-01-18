<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ со объектом черновика тендера и тендер-запроса
 * source: tender/responses/tender-draft-request-response.json
 *
 * @property MessageV2[] $message
 * @property TenderDraftRequestResponseData $data
 */
final class TenderDraftRequestResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderDraftRequestResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

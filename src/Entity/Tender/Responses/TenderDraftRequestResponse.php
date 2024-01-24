<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ со объектом черновика тендера и тендер-запроса
 * source: tender/responses/tender-draft-request-response.json
 *
 * @property TenderDraftRequestResponseData $data
 */
final class TenderDraftRequestResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderDraftRequestResponseData']];
    protected static $nullables = ['data' => false];
}

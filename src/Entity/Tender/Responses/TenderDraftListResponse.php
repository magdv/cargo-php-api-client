<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ со списком черновиков тендера
 * source: tender/responses/tender-draft-list-response.json
 *
 * @property TenderDraftListResponseData $data
 */
final class TenderDraftListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderDraftListResponseData']];
    protected static $nullables = ['data' => false];
}

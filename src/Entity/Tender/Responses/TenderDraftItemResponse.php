<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ со объектом черновика тендера
 * source: tender/responses/tender-draft-item-response.json
 *
 * @property TenderDraftItemResponseData $data
 */
final class TenderDraftItemResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderDraftItemResponseData']];
    protected static $nullables = ['data' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/responses/tender-draft-item-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ со объектом черновика тендера
 * source: tender/responses/tender-draft-item-response.json
 *
 * @property MessageV2[] $message
 * @property TenderDraftItemResponseData $data
 */
final class TenderDraftItemResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderDraftItemResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

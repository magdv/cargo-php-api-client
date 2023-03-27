<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/responses/tender-request-item-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с тендером в статусе 'Сбор предложений'
 * source: tender/responses/tender-request-item-response.json
 *
 * @property MessageV2[] $message
 * @property TenderRequestItemResponseData $data
 */
final class TenderRequestItemResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestItemResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

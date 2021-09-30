<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с лотом в статусе 'Сбор предложений'
 * source: tender/responses/tender-request-lot-item-response.json
 *
 * @property MessageV2[] $message
 * @property TenderRequestLotItemResponseData $data
 */
final class TenderRequestLotItemResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestLotItemResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с списком лотов в статусе 'Сбор предложений'
 * source: tender/responses/tender-request-lot-list-response.json
 *
 * @property MessageV2[] $message
 * @property TenderRequestLotListResponseData $data
 */
final class TenderRequestLotListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestLotListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

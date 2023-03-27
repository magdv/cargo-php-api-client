<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/responses/tender-request-list-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с списком тендеров в статусе 'Сбор предложений'
 * source: tender/responses/tender-request-list-response.json
 *
 * @property MessageV2[] $message
 * @property TenderRequestListResponseData $data
 */
final class TenderRequestListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

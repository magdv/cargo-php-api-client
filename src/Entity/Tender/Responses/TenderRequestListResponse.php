<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с списком тендеров в статусе 'Сбор предложений'
 * source: tender/responses/tender-request-list-response.json
 *
 * @property TenderRequestListResponseData $data
 */
final class TenderRequestListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestListResponseData']];
    protected static $nullables = ['data' => false];
}

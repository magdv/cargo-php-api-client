<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с лотом в статусе 'Сбор предложений'
 * source: tender/responses/tender-request-lot-item-response.json
 *
 * @property TenderRequestLotItemResponseData $data
 */
final class TenderRequestLotItemResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestLotItemResponseData']];
    protected static $nullables = ['data' => false];
}

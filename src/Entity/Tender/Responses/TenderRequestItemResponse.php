<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с тендером в статусе 'Сбор предложений'
 * source: tender/responses/tender-request-item-response.json
 *
 * @property TenderRequestItemResponseData $data
 */
final class TenderRequestItemResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestItemResponseData']];
    protected static $nullables = ['data' => false];
}

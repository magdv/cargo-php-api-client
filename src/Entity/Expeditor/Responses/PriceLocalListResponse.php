<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список справочника цен
 * source: expeditor/responses/price-local-list-response.json
 *
 * @property PriceLocalListResponseData $data
 */
final class PriceLocalListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalListResponseData']];
    protected static $nullables = ['data' => false];
}

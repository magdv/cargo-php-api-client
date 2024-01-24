<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Элемент справочника цен
 * source: expeditor/responses/price-local-item-response.json
 *
 * @property PriceLocalItemResponseData $data
 */
final class PriceLocalItemResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalItemResponseData']];
    protected static $nullables = ['data' => false];
}

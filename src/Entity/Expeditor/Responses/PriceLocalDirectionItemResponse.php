<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Карточка направления отдельного элемента справочника цен
 * source: expeditor/responses/price-local-direction-item-response.json
 *
 * @property PriceLocalDirectionItemResponseData $data
 */
final class PriceLocalDirectionItemResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalDirectionItemResponseData'],
    ];

    protected static $nullables = ['data' => false];
}

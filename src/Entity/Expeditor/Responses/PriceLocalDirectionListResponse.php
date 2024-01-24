<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список направлений элемента справочника цен
 * source: expeditor/responses/price-local-direction-list-response.json
 *
 * @property PriceLocalDirectionListResponseData $data
 */
final class PriceLocalDirectionListResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalDirectionListResponseData'],
    ];

    protected static $nullables = ['data' => false];
}

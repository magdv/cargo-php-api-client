<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Карточка направления отдельного элемента справочника цен
 * source: expeditor/responses/price-local-direction-item-response.json
 *
 * @property MessageV2[] $message
 * @property PriceLocalDirectionItemResponseData $data
 */
final class PriceLocalDirectionItemResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalDirectionItemResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

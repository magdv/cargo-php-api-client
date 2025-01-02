<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PriceLocal\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Карточка направления отдельного элемента справочника цен
 * source: price-local/responses/price-local-direction-item-response.json
 *
 * @property PriceLocalDirectionItemResponseData $data
 * @property MessageV2[] $message
 */
final class PriceLocalDirectionItemResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\PriceLocal\Responses\PriceLocalDirectionItemResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}

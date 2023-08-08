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
 * Карточка пула направлений и цен
 * source: expeditor/responses/price-local-pool-item-response.json
 *
 * @property MessageV2[] $message
 * @property PriceLocalPoolItemResponseData $data
 */
final class PriceLocalPoolItemResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalPoolItemResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

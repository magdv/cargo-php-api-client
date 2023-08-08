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
 * Список пулов направлений и цен
 * source: expeditor/responses/price-local-pool-list-response.json
 *
 * @property MessageV2[] $message
 * @property PriceLocalPoolListResponseData $data
 */
final class PriceLocalPoolListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalPoolListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

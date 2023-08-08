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
 * Список направлений элемента справочника цен
 * source: expeditor/responses/price-local-direction-list-response.json
 *
 * @property MessageV2[] $message
 * @property PriceLocalDirectionListResponseData $data
 */
final class PriceLocalDirectionListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\PriceLocalDirectionListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

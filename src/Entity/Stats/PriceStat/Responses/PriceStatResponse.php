<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Stats\PriceStat\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ со статистикой цен
 * source: stats/price-stat/responses/price-stat-response.json
 *
 * @property PriceStatResponseData $data
 */
final class PriceStatResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Stats\PriceStat\Responses\PriceStatResponseData']];
    protected static $nullables = ['data' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Stats\PriceStat\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: stats/price-stat/responses/price-stat-response.json#/properties/data
 *
 * @property PriceStatResponseDataPriceStat[] $priceStat
 */
final class PriceStatResponseData extends AbstractEntity
{
    protected static $types = [
        'priceStat' => ['array', 'Cargomart\ApiClient\Entity\Stats\PriceStat\Responses\PriceStatResponseDataPriceStat'],
    ];

    protected static $nullables = ['priceStat' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Stats\PriceStat\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\IdIntName;

/**
 * source: stats/price-stat/responses/price-stat-response.json#/properties/data
 *
 * @property PriceStatResponseDataPriceStat[] $priceStat
 * @property IdIntName[] $routePoints
 */
final class PriceStatResponseData extends AbstractEntity
{
    protected static $types = [
        'priceStat' => ['array', 'Cargomart\ApiClient\Entity\Stats\PriceStat\Responses\PriceStatResponseDataPriceStat'],
        'routePoints' => ['array', 'Cargomart\ApiClient\Entity\Base\IdIntName'],
    ];

    protected static $nullables = ['priceStat' => false, 'routePoints' => false];
}

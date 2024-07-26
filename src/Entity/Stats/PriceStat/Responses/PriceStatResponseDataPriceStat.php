<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Stats\PriceStat\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: stats/price-stat/responses/price-stat-response.json#/properties/data#/properties/priceStat
 *
 * @property string $routeKladr
 * @property string $routeName
 * @property int $truckTypeId
 * @property float $truckWeight
 * @property int $truckCapacity
 * @property string $precision
 * @property int $count
 * @property string $minPrice
 * @property string $maxPrice
 * @property string $medianPrice
 * @property string $avgPrice
 */
final class PriceStatResponseDataPriceStat extends AbstractEntity
{
    protected static $types = [
        'routeKladr' => ['string'],
        'routeName' => ['string'],
        'truckTypeId' => ['int'],
        'truckWeight' => ['float'],
        'truckCapacity' => ['int'],
        'precision' => ['string'],
        'count' => ['int'],
        'minPrice' => ['string'],
        'maxPrice' => ['string'],
        'medianPrice' => ['string'],
        'avgPrice' => ['string'],
    ];

    protected static $nullables = [
        'routeKladr' => false,
        'routeName' => false,
        'truckTypeId' => false,
        'truckWeight' => false,
        'truckCapacity' => false,
        'precision' => false,
        'count' => false,
        'minPrice' => false,
        'maxPrice' => false,
        'medianPrice' => false,
        'avgPrice' => false,
    ];
}

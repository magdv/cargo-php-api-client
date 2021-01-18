<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Rate;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Цены по дням
 * source: rate/rate-item.json#/properties/points
 *
 * @property string $date
 * @property int $price
 */
final class RateItemPoints extends AbstractEntity
{
    protected static $types = ['date' => ['string'], 'price' => ['int']];
    protected static $nullables = ['date' => false, 'price' => false];
}

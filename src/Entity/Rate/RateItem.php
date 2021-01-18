<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Rate;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Структура тела запроса на котировки
 * source: rate/rate-item.json
 *
 * @property string $name
 * @property int $price
 * @property int $change
 * @property RateItemPoints[] $points
 */
final class RateItem extends AbstractEntity
{
    protected static $types = [
        'name' => ['string'],
        'price' => ['int'],
        'change' => ['int'],
        'points' => ['array', 'Cargomart\ApiClient\Entity\Rate\RateItemPoints'],
    ];

    protected static $nullables = ['name' => false, 'price' => false, 'change' => false, 'points' => false];
}

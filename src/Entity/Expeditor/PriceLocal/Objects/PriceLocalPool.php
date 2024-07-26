<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект пула цен и направлений
 * source: expeditor/PriceLocal/objects/price-local-pool.json
 *
 * @property int $id
 * @property string $title
 * @property bool $isActive
 * @property int $directionsCount
 * @property PriceLocalPoolAccess $access
 */
final class PriceLocalPool extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'title' => ['string'],
        'isActive' => ['bool'],
        'directionsCount' => ['int'],
        'access' => ['Cargomart\ApiClient\Entity\Expeditor\PriceLocal\Objects\PriceLocalPoolAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'title' => false,
        'isActive' => false,
        'directionsCount' => false,
        'access' => false,
    ];
}

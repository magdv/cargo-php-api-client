<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/objects/price-local-pool.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект пула цен и направлений
 * source: expeditor/objects/price-local-pool.json
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
        'access' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\PriceLocalPoolAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'title' => false,
        'isActive' => false,
        'directionsCount' => false,
        'access' => false,
    ];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: base/coordinate-radius.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Координаты с радиусом
 * source: base/coordinate-radius.json
 *
 * @property float $latitude
 * @property float $longitude
 * @property int $radius
 */
final class CoordinateRadius extends AbstractEntity
{
    protected static $types = ['latitude' => ['float'], 'longitude' => ['float'], 'radius' => ['int']];
    protected static $nullables = ['latitude' => false, 'longitude' => false, 'radius' => false];
}

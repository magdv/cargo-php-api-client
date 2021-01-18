<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Координата
 * source: base/coordinate.json
 *
 * @property float $latitude
 * @property float $longitude
 */
final class Coordinate extends AbstractEntity
{
    protected static $types = ['latitude' => ['float'], 'longitude' => ['float']];
    protected static $nullables = ['latitude' => false, 'longitude' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: locality/objects/locality.json#/properties/coordinates
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Locality\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: locality/objects/locality.json#/properties/coordinates
 *
 * @property float $latitude
 * @property float $longitude
 * @property int $status
 */
final class LocalityCoordinates extends AbstractEntity
{
    protected static $types = ['latitude' => ['float'], 'longitude' => ['float'], 'status' => ['int']];
    protected static $nullables = ['latitude' => false, 'longitude' => false, 'status' => false];
}

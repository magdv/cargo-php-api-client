<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: itinerary/objects/itinerary.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Itinerary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Элемент маршрута
 * source: itinerary/objects/itinerary.json
 *
 * @property float[][] $path
 * @property int $distance
 * @property int $duration
 */
final class Itinerary extends AbstractEntity
{
    protected static $types = ['path' => ['array', 'float'], 'distance' => ['int'], 'duration' => ['int']];
    protected static $nullables = ['path' => false, 'distance' => false, 'duration' => false];
}

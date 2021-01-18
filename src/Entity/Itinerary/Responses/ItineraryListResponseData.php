<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Itinerary\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: itinerary/responses/itinerary-list-response.json#/properties/data
 *
 * @property \stdClass $itinerary
 * @property float[][] $carMonitor
 */
final class ItineraryListResponseData extends AbstractEntity
{
    protected static $types = ['itinerary' => ['\stdClass'], 'carMonitor' => ['array', 'float']];
    protected static $nullables = ['itinerary' => true, 'carMonitor' => false];
}

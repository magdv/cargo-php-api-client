<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Itinerary\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Itinerary\Objects\Itinerary;

/**
 * source: itinerary/responses/itinerary-list-response.json#/properties/data
 *
 * @property Itinerary[] $itinerary
 * @property float[][] $carMonitor
 */
final class ItineraryListResponseData extends AbstractEntity
{
    protected static $types = [
        'itinerary' => ['array', 'Cargomart\ApiClient\Entity\Itinerary\Objects\Itinerary'],
        'carMonitor' => ['array', 'float'],
    ];

    protected static $nullables = ['itinerary' => false, 'carMonitor' => false];
}

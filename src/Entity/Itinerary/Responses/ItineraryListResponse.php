<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Itinerary\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список маршруштных точек
 * source: itinerary/responses/itinerary-list-response.json
 *
 * @property ItineraryListResponseData $data
 */
final class ItineraryListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Itinerary\Responses\ItineraryListResponseData']];
    protected static $nullables = ['data' => false];
}

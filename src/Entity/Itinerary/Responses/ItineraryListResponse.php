<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: itinerary/responses/itinerary-list-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Itinerary\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список маршруштных точек
 * source: itinerary/responses/itinerary-list-response.json
 *
 * @property MessageV2[] $message
 * @property ItineraryListResponseData $data
 */
final class ItineraryListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Itinerary\Responses\ItineraryListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

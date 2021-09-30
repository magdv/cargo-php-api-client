<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список машин в разделе автопарка
 * source: truck/responses/truck-list.json
 *
 * @property MessageV2[] $message
 * @property TruckListData $data
 */
final class TruckList extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Truck\Responses\TruckListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

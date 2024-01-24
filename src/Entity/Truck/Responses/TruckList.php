<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список машин в разделе автопарка
 * source: truck/responses/truck-list.json
 *
 * @property TruckListData $data
 */
final class TruckList extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Truck\Responses\TruckListData']];
    protected static $nullables = ['data' => false];
}

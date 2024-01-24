<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Одна машина в разделе автопарка
 * source: truck/responses/truck-item.json
 *
 * @property TruckItemData $data
 */
final class TruckItem extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Truck\Responses\TruckItemData']];
    protected static $nullables = ['data' => false];
}

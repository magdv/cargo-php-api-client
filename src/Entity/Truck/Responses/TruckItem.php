<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Одна машина в разделе автопарка
 * source: truck/responses/truck-item.json
 *
 * @property MessageV2[] $message
 * @property TruckItemData $data
 */
final class TruckItem extends AbstractEntity
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Truck\Responses\TruckItemData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

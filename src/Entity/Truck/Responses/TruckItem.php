<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: truck/responses/truck-item.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Одна машина в разделе автопарка
 * source: truck/responses/truck-item.json
 *
 * @property MessageV2[] $message
 * @property TruckItemData $data
 */
final class TruckItem extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Truck\Responses\TruckItemData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Пункт погрузки/выгрузки
 * source: storage-point/responses/point-one.json
 *
 * @property MessageV2[] $message
 * @property PointOneData $data
 */
final class PointOne extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\StoragePoint\Responses\PointOneData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

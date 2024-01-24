<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Пункт погрузки/выгрузки
 * source: storage-point/responses/point-one.json
 *
 * @property PointOneData $data
 * @property MessageV2[] $message
 */
final class PointOne extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\StoragePoint\Responses\PointOneData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}

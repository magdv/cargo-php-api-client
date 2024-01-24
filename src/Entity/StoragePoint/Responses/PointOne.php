<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Пункт погрузки/выгрузки
 * source: storage-point/responses/point-one.json
 *
 * @property PointOneData $data
 */
final class PointOne extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\StoragePoint\Responses\PointOneData']];
    protected static $nullables = ['data' => false];
}

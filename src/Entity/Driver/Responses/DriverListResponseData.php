<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: driver/responses/driver-list-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Driver\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Driver\Models\Driver;

/**
 * source: driver/responses/driver-list-response.json#/properties/data
 *
 * @property Driver[] $driver
 * @property Pagination $pagination
 */
final class DriverListResponseData extends AbstractEntity
{
    protected static $types = [
        'driver' => ['array', 'Cargomart\ApiClient\Entity\Driver\Models\Driver'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['driver' => false, 'pagination' => false];
}

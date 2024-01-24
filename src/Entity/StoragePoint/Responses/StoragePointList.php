<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список пунктов погрузки
 * source: storage-point/responses/storage-point-list.json
 *
 * @property StoragePointListData $data
 */
final class StoragePointList extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\StoragePoint\Responses\StoragePointListData']];
    protected static $nullables = ['data' => false];
}

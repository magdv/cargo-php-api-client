<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список пунктов погрузки
 * source: storage-point/responses/storage-point-list.json
 *
 * @property MessageV2[] $message
 * @property StoragePointListData $data
 */
final class StoragePointList extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\StoragePoint\Responses\StoragePointListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

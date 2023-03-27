<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: storage-point/responses/point-list.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список пунктов погрузки
 * source: storage-point/responses/point-list.json
 *
 * @property MessageV2[] $message
 * @property PointListData $data
 */
final class PointList extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\StoragePoint\Responses\PointListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

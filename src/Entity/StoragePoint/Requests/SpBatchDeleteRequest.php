<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Список идентификаторов пунктов погрузки/выгрузки для удаления
 * source: storage-point/requests/sp-batch-delete-request.json
 *
 * @property int[] $id
 */
final class SpBatchDeleteRequest extends AbstractEntity
{
    protected static $types = ['id' => ['array', 'int']];
    protected static $nullables = ['id' => false];
}

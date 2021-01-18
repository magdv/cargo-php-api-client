<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\File\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект запроса на удаление списка файлов
 * source: file/requests/file-ids.json
 *
 * @property int[] $id
 */
final class FileIds extends AbstractEntity
{
    protected static $types = ['id' => ['array', 'int']];
    protected static $nullables = ['id' => false];
}

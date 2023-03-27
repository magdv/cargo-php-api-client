<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: base/requests/hash-list-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос список хэш идентификаторов
 * source: base/requests/hash-list-request.json
 *
 * @property string[] $idList
 */
final class HashListRequest extends AbstractEntity
{
    protected static $types = ['idList' => ['array', 'string']];
    protected static $nullables = ['idList' => false];
}

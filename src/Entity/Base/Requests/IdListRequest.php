<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос список числовых идентификаторов
 * source: base/requests/id-list-request.json
 *
 * @property int[] $idList
 */
final class IdListRequest extends AbstractEntity
{
    protected static $types = ['idList' => ['array', 'int']];
    protected static $nullables = ['idList' => false];
}

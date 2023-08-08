<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Вид деятельности
 * source: dictionary/objects/activity-type.json
 *
 * @property int $id
 * @property string $name
 * @property string $role
 * @property string $code
 */
final class ActivityType extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'name' => ['string'], 'role' => ['string'], 'code' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false, 'role' => false, 'code' => false];
}

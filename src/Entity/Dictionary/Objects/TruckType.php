<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: dictionary/objects/truck-type.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Типы кузова
 * source: dictionary/objects/truck-type.json
 *
 * @property int $id
 * @property string $name
 * @property string $short
 * @property string $type
 */
final class TruckType extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'name' => ['string'], 'short' => ['string'], 'type' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false, 'short' => false, 'type' => false];
}

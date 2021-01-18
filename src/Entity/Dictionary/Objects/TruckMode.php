<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Виды ТС
 * source: dictionary/objects/truck-mode.json
 *
 * @property int $id
 * @property string $name
 * @property string $type
 */
final class TruckMode extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'name' => ['string'], 'type' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false, 'type' => false];
}

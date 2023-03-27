<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: dictionary/objects/truck-device.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект элемента списка доп оборудования ТС
 * source: dictionary/objects/truck-device.json
 *
 * @property string $id
 * @property string $name
 */
final class TruckDevice extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'name' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false];
}

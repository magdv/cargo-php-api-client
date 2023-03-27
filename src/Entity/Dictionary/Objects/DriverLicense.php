<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: dictionary/objects/driver-license.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Модель категории водительских прав
 * source: dictionary/objects/driver-license.json
 *
 * @property int $id
 * @property string $name
 */
final class DriverLicense extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'name' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false];
}

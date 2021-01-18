<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Типы документов
 * source: dictionary/objects/timezone.json
 *
 * @property string $timezone
 * @property string $name
 * @property int $offset
 */
final class Timezone extends AbstractEntity
{
    protected static $types = ['timezone' => ['string'], 'name' => ['string'], 'offset' => ['int']];
    protected static $nullables = ['timezone' => false, 'name' => false, 'offset' => false];
}

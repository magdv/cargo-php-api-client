<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект куратора
 * source: expeditor/objects/curator.json
 *
 * @property int $id
 * @property string $name
 * @property string $companyName
 */
final class Curator extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'name' => ['string'], 'companyName' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false, 'companyName' => false];
}

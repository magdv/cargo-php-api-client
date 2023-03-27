<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: trailer/objects/trailer-one.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Trailer\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * объект тягачей и прицепов
 * source: trailer/objects/trailer-one.json
 *
 * @property string $name
 * @property bool $isTruck
 * @property bool $isTrailer
 */
final class TrailerOne extends AbstractEntity
{
    protected static $types = ['name' => ['string'], 'isTruck' => ['bool'], 'isTrailer' => ['bool']];
    protected static $nullables = ['name' => false, 'isTruck' => false, 'isTrailer' => false];
}

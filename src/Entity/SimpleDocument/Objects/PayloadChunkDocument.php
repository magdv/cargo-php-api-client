<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: simple-document/objects/payload-chunk-document.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о документе из титула отправителя
 * source: simple-document/objects/payload-chunk-document.json
 *
 * @property string $number
 * @property string $date
 */
final class PayloadChunkDocument extends AbstractEntity
{
    protected static $types = ['number' => ['string'], 'date' => ['string']];
    protected static $nullables = ['number' => false, 'date' => false];
}

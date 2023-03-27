<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: simple-document/objects/payload-chunk-contract.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о договоре из титула отправителя
 * source: simple-document/objects/payload-chunk-contract.json
 *
 * @property string $name
 * @property string $date
 */
final class PayloadChunkContract extends AbstractEntity
{
    protected static $types = ['name' => ['string'], 'date' => ['string']];
    protected static $nullables = ['name' => false, 'date' => false];
}

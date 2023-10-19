<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о причине отказа или аннулирования из титула отправителя
 * source: simple-document/objects/payload-chunk-cancellation.json
 *
 * @property string $reason
 */
final class PayloadChunkCancellation extends AbstractEntity
{
    protected static $types = ['reason' => ['string']];
    protected static $nullables = ['reason' => false];
}

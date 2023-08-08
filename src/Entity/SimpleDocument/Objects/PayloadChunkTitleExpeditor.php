<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о экспедиторе из титула экспедитора
 * source: simple-document/objects/payload-chunk-title-expeditor.json
 *
 * @property PayloadChunkClient $expeditor
 * @property PayloadChunkESign $sign
 * @property string $price
 * @property PayloadChunkCancellation $reject
 */
final class PayloadChunkTitleExpeditor extends AbstractEntity
{
    protected static $types = [
        'expeditor' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkClient'],
        'sign' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkESign'],
        'price' => ['string'],
        'reject' => ['Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkCancellation'],
    ];

    protected static $nullables = ['expeditor' => false, 'sign' => false, 'price' => false, 'reject' => false];
}

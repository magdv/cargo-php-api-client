<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DraftDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Mixins\OrderDowntimeCommonMixin;

/**
 * Набор полей объекта черновика претензии
 * source: draft-document/objects/DraftDocumentDowntimeClaimFields.json
 *
 * @property string $type
 * @property OrderDowntimeCommonMixin $data
 */
final class DraftDocumentDowntimeClaimFields extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'data' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Mixins\OrderDowntimeCommonMixin'],
    ];

    protected static $nullables = ['type' => false, 'data' => false];
}

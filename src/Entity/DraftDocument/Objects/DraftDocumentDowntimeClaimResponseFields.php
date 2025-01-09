<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DraftDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Mixins\OrderDowntimeResponseMixin;

/**
 * Набор полей объекта черновика ответа на претензию
 * source: draft-document/objects/DraftDocumentDowntimeClaimResponseFields.json
 *
 * @property string $type
 * @property OrderDowntimeResponseMixin $data
 */
final class DraftDocumentDowntimeClaimResponseFields extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'data' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Mixins\OrderDowntimeResponseMixin'],
    ];

    protected static $nullables = ['type' => false, 'data' => false];
}

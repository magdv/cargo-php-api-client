<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DraftDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Mixins\OrderDowntimeResponseMixin;

/**
 * Набор полей объекта черновика ответа на претензию перевозчика
 * source: draft-document/objects/DraftDocumentDowntimeClaimResponse.json
 *
 * @property string $type
 * @property OrderDowntimeResponseMixin $data
 * @property string $id
 * @property string $createDate
 * @property DraftDocumentAccess $access
 */
final class DraftDocumentDowntimeClaimResponse extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'data' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Mixins\OrderDowntimeResponseMixin'],
        'id' => ['string'],
        'createDate' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\DraftDocument\Objects\DraftDocumentAccess'],
    ];

    protected static $nullables = [
        'type' => false,
        'data' => false,
        'id' => false,
        'createDate' => false,
        'access' => false,
    ];
}

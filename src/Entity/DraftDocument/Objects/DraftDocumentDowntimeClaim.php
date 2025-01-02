<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DraftDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Requests\OrderDowntimeClaimCreateRequestV2;

/**
 * Набор полей объекта черновика претензии перевозчика
 * source: draft-document/objects/DraftDocumentDowntimeClaim.json
 *
 * @property string $type
 * @property OrderDowntimeClaimCreateRequestV2 $data
 * @property string $id
 * @property string $createDate
 * @property DraftDocumentAccess $access
 */
final class DraftDocumentDowntimeClaim extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'data' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Requests\OrderDowntimeClaimCreateRequestV2'],
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

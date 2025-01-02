<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DraftDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects\DigitalActNonDeliveryCarFields;

/**
 * Набор полей объекта черновика акта о неподачи машины
 * source: draft-document/objects/DraftDocumentActNonDeliveryCar.json
 *
 * @property string $type
 * @property DigitalActNonDeliveryCarFields $data
 * @property string $id
 * @property string $createDate
 * @property DraftDocumentAccess $access
 */
final class DraftDocumentActNonDeliveryCar extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'data' => ['Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects\DigitalActNonDeliveryCarFields'],
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

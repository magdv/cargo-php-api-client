<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DraftDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Mixins\DigitalActNonDeliveryCarMixin;

/**
 * Набор полей объекта черновика акта о неподаче машины
 * source: draft-document/objects/DraftDocumentActNonDeliveryCarFields.json
 *
 * @property string $type
 * @property DigitalActNonDeliveryCarMixin $data
 */
final class DraftDocumentActNonDeliveryCarFields extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'data' => ['Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Mixins\DigitalActNonDeliveryCarMixin'],
    ];

    protected static $nullables = ['type' => false, 'data' => false];
}

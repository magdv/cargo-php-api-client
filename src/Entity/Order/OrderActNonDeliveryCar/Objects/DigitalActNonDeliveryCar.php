<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\SignedDocument\Objects\SignedDocument;

/**
 * Объект электронного акта о неподаче машины
 * source: order/OrderActNonDeliveryCar/objects/DigitalActNonDeliveryCar.json
 *
 * @property string $id
 * @property string $status
 * @property SignedDocument $signedDocument
 * @property string $createDate
 */
final class DigitalActNonDeliveryCar extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'status' => ['string'],
        'signedDocument' => ['Cargomart\ApiClient\Entity\SignedDocument\Objects\SignedDocument'],
        'createDate' => ['string'],
    ];

    protected static $nullables = ['id' => false, 'status' => false, 'signedDocument' => false, 'createDate' => false];
}

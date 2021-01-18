<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Лог покупки/отмены презаказов в группе
 * source: manage/pre-order/objects/pre-order-log.json
 *
 * @property string $serialId
 * @property string $createDate
 * @property string $event
 * @property string $price
 * @property string $carrierId
 * @property int $orderId
 */
final class PreOrderLog extends AbstractEntity
{
    protected static $types = [
        'serialId' => ['string'],
        'createDate' => ['string'],
        'event' => ['string'],
        'price' => ['string'],
        'carrierId' => ['string'],
        'orderId' => ['int'],
    ];

    protected static $nullables = [
        'serialId' => false,
        'createDate' => false,
        'event' => false,
        'price' => false,
        'carrierId' => false,
        'orderId' => false,
    ];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Лог изменения группы предзаказов
 * source: manage/pre-order/objects/pre-order-group-log.json
 *
 * @property string $createDate
 * @property string $price
 * @property int $total
 * @property int $creatorId
 */
final class PreOrderGroupLog extends AbstractEntity
{
    protected static $types = [
        'createDate' => ['string'],
        'price' => ['string'],
        'total' => ['int'],
        'creatorId' => ['int'],
    ];

    protected static $nullables = ['createDate' => false, 'price' => false, 'total' => false, 'creatorId' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Статистика для группы предзаказа
 * source: manage/pre-order/objects/pre-order-group-admin-stats.json
 *
 * @property int $total
 * @property int $offers
 * @property int $completedOffers
 * @property int $canceledOffers
 */
final class PreOrderGroupAdminStats extends AbstractEntity
{
    protected static $types = [
        'total' => ['int'],
        'offers' => ['int'],
        'completedOffers' => ['int'],
        'canceledOffers' => ['int'],
    ];

    protected static $nullables = [
        'total' => false,
        'offers' => false,
        'completedOffers' => false,
        'canceledOffers' => false,
    ];
}

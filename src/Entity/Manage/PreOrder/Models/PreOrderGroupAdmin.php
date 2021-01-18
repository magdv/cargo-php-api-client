<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Models;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Objects\PreOrderGroupAdminAccess;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Objects\PreOrderGroupAdminStats;

/**
 * Группа предзаказов
 * source: manage/pre-order/models/pre-order-group-admin.json
 *
 * @property int $id
 * @property int $templateId
 * @property string $loadingDate
 * @property string $price
 * @property bool $isActive
 * @property PreOrderGroupAdminStats $stats
 * @property PreOrderGroupAdminAccess $access
 */
final class PreOrderGroupAdmin extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'templateId' => ['int'],
        'loadingDate' => ['string'],
        'price' => ['string'],
        'isActive' => ['bool'],
        'stats' => ['Cargomart\ApiClient\Entity\Manage\PreOrder\Objects\PreOrderGroupAdminStats'],
        'access' => ['Cargomart\ApiClient\Entity\Manage\PreOrder\Objects\PreOrderGroupAdminAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'templateId' => false,
        'loadingDate' => false,
        'price' => false,
        'isActive' => false,
        'stats' => false,
        'access' => false,
    ];
}

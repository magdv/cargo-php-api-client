<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к группе предзаказов
 * source: manage/pre-order/objects/pre-order-group-admin-access.json
 *
 * @property bool $view
 * @property bool $update
 * @property bool $viewBuyingLog
 * @property bool $viewChangingLog
 * @property bool $viewPreOrderList
 */
final class PreOrderGroupAdminAccess extends AbstractEntity
{
    protected static $types = [
        'view' => ['bool'],
        'update' => ['bool'],
        'viewBuyingLog' => ['bool'],
        'viewChangingLog' => ['bool'],
        'viewPreOrderList' => ['bool'],
    ];

    protected static $nullables = [
        'view' => false,
        'update' => false,
        'viewBuyingLog' => false,
        'viewChangingLog' => false,
        'viewPreOrderList' => false,
    ];
}

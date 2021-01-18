<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к предзаказу
 * source: manage/pre-order/objects/pre-order-admin-access.json
 *
 * @property bool $view
 * @property bool $cancel
 */
final class PreOrderAdminAccess extends AbstractEntity
{
    protected static $types = ['view' => ['bool'], 'cancel' => ['bool']];
    protected static $nullables = ['view' => false, 'cancel' => false];
}

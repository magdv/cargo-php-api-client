<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к шаблону предзаказа
 * source: manage/pre-order/objects/pre-order-template-admin-access.json
 *
 * @property bool $view
 */
final class PreOrderTemplateAdminAccess extends AbstractEntity
{
    protected static $types = ['view' => ['bool']];
    protected static $nullables = ['view' => false];
}

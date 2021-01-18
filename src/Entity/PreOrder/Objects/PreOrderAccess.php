<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PreOrder\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к предзаказам
 * source: pre-order/objects/pre-order-access.json
 *
 * @property bool $updateCancel
 */
final class PreOrderAccess extends AbstractEntity
{
    protected static $types = ['updateCancel' => ['bool']];
    protected static $nullables = ['updateCancel' => false];
}

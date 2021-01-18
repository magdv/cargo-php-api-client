<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PreOrder\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к группе предзаказов
 * source: pre-order/objects/pre-order-group-access.json
 *
 * @property bool $createAccept
 */
final class PreOrderGroupAccess extends AbstractEntity
{
    protected static $types = ['createAccept' => ['bool']];
    protected static $nullables = ['createAccept' => false];
}

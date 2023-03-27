<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: contract-type/objects/contract-type-access.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ContractType\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Права доступа к типу договора
 * source: contract-type/objects/contract-type-access.json
 *
 * @property bool $update
 * @property bool $delete
 */
final class ContractTypeAccess extends AbstractEntity
{
    protected static $types = ['update' => ['bool'], 'delete' => ['bool']];
    protected static $nullables = ['update' => false, 'delete' => false];
}

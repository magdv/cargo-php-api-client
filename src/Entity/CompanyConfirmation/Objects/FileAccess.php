<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Список доступа к файлу
 * source: company-confirmation/objects/file.json#/properties/access
 *
 * @property bool $delete
 */
final class FileAccess extends AbstractEntity
{
    protected static $types = ['delete' => ['bool']];
    protected static $nullables = ['delete' => false];
}

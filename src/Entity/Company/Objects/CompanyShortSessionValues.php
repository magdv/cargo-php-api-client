<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Свойства засимые от текущего пользователя
 * source: company/objects/company-short.json#/properties/sessionValues
 *
 * @property bool $isPartner
 */
final class CompanyShortSessionValues extends AbstractEntity
{
    protected static $types = ['isPartner' => ['bool']];
    protected static $nullables = ['isPartner' => false];
}

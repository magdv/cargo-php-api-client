<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Доп анкета перевозчика
 * source: company-confirmation/objects/company-profile.json#/properties/carryingOption
 *
 * @property bool $useOnlyOwnTrucks
 * @property bool $hireAnotherCarriers
 */
final class CompanyProfileCarryingOption extends AbstractEntity
{
    protected static $types = ['useOnlyOwnTrucks' => ['bool'], 'hireAnotherCarriers' => ['bool']];
    protected static $nullables = ['useOnlyOwnTrucks' => false, 'hireAnotherCarriers' => false];
}

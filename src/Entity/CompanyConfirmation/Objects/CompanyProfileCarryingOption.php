<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company-confirmation/objects/company-profile.json#/properties/carryingOption
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
 * @property bool $internationalCarriage
 */
final class CompanyProfileCarryingOption extends AbstractEntity
{
    protected static $types = [
        'useOnlyOwnTrucks' => ['bool'],
        'hireAnotherCarriers' => ['bool'],
        'internationalCarriage' => ['bool'],
    ];

    protected static $nullables = [
        'useOnlyOwnTrucks' => false,
        'hireAnotherCarriers' => false,
        'internationalCarriage' => false,
    ];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Company\Objects\Settings;

/**
 * Данные
 * source: company/responses/company-settings.json#/properties/data
 *
 * @property Settings $settings
 * @property CompanyShort $company
 */
final class CompanySettingsData extends AbstractEntity
{
    protected static $types = [
        'settings' => ['Cargomart\ApiClient\Entity\Company\Objects\Settings'],
        'company' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
    ];

    protected static $nullables = ['settings' => false, 'company' => false];
}

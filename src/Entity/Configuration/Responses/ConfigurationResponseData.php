<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Configuration\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Configuration\Objects\ConfigurationFeatures;
use Cargomart\ApiClient\Entity\Configuration\Objects\ConfigurationPermissions;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: configuration/responses/configuration-response.json#/properties/data
 *
 * @property string $gpContactTimetable
 * @property ConfigurationFeatures $features
 * @property ConfigurationPermissions $permissions
 * @property CompanyShort $expeditor
 * @property UserContactShort[] $expeditorCurators
 * @property string $expeditorContractStatus
 * @property string $simpleSignatureStatus
 */
final class ConfigurationResponseData extends AbstractEntity
{
    protected static $types = [
        'gpContactTimetable' => ['string'],
        'features' => ['Cargomart\ApiClient\Entity\Configuration\Objects\ConfigurationFeatures'],
        'permissions' => ['Cargomart\ApiClient\Entity\Configuration\Objects\ConfigurationPermissions'],
        'expeditor' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'expeditorCurators' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'expeditorContractStatus' => ['string'],
        'simpleSignatureStatus' => ['string'],
    ];

    protected static $nullables = [
        'gpContactTimetable' => false,
        'features' => false,
        'permissions' => false,
        'expeditor' => false,
        'expeditorCurators' => false,
        'expeditorContractStatus' => false,
        'simpleSignatureStatus' => false,
    ];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: configuration/responses/configuration-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Configuration\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Configuration\Objects\ConfigurationFeatures;
use Cargomart\ApiClient\Entity\Configuration\Objects\ConfigurationMobileApp;
use Cargomart\ApiClient\Entity\Configuration\Objects\ConfigurationPermissions;
use Cargomart\ApiClient\Entity\Expeditor\Objects\ExpeditorContract;
use Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerContract;
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
 * @property string $expeditorContractComment
 * @property ExpeditorContract $expeditorConsignorContract
 * @property ExpeditorContract $expeditorCarrierContract
 * @property GeneralPartnerContract[] $generalPartnerConsignorContract
 * @property string $simpleSignatureStatus
 * @property string $addressForOriginals
 * @property string $useDeskToken
 * @property string $reCaptchaKey
 * @property ConfigurationMobileApp $mobileApp
 * @property \stdClass $extraValues
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
        'expeditorContractComment' => ['string'],
        'expeditorConsignorContract' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ExpeditorContract'],
        'expeditorCarrierContract' => ['Cargomart\ApiClient\Entity\Expeditor\Objects\ExpeditorContract'],
        'generalPartnerConsignorContract' => [
            'array',
            'Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerContract',
        ],
        'simpleSignatureStatus' => ['string'],
        'addressForOriginals' => ['string'],
        'useDeskToken' => ['string'],
        'reCaptchaKey' => ['string'],
        'mobileApp' => ['Cargomart\ApiClient\Entity\Configuration\Objects\ConfigurationMobileApp'],
        'extraValues' => ['\stdClass'],
    ];

    protected static $nullables = [
        'gpContactTimetable' => false,
        'features' => false,
        'permissions' => false,
        'expeditor' => false,
        'expeditorCurators' => false,
        'expeditorContractStatus' => false,
        'expeditorContractComment' => false,
        'expeditorConsignorContract' => false,
        'expeditorCarrierContract' => false,
        'generalPartnerConsignorContract' => false,
        'simpleSignatureStatus' => false,
        'addressForOriginals' => false,
        'useDeskToken' => false,
        'reCaptchaKey' => false,
        'mobileApp' => false,
        'extraValues' => true,
    ];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Модель данных ЮЛ или ИП
 * source: company/objects/company-info.json
 *
 * @property string $id
 * @property string $shortName
 * @property string $type
 * @property \stdClass $logo
 * @property \stdClass $actualAddress
 * @property string $phone
 * @property string $countryCode
 * @property \stdClass $headName
 * @property \stdClass $description
 * @property \stdClass $activityType
 * @property \stdClass $activityTypeName
 * @property \stdClass $activityTypeId
 * @property DisabledFull $disabled
 * @property int $ordersByMonth
 * @property bool $isBlocked
 * @property int $partnerStatus
 * @property PartnerShortItem[] $partners
 * @property int $clientId
 * @property \stdClass $email
 * @property \stdClass $activityTypeAlias
 * @property string $operatingAccount
 * @property string $bankName
 * @property string $correspondingAccount
 * @property string $bic
 * @property int $countCreateOrder
 * @property int $countWinnerOrder
 * @property bool $isCooperatingGeneralPartner
 * @property bool $isWithVat
 * @property bool $isPartnershipAllowed
 * @property bool $isWithBranch
 * @property string $inn
 * @property string $createDate
 * @property string $registerDate
 * @property int $carCount
 * @property CompanyMetrics $metrics
 * @property bool $isDirectSender
 * @property int $status
 * @property PartnerContract $contract
 * @property PartnerContractWithType[] $partnerContract
 * @property bool $isValidated
 * @property string $legalAddress
 * @property int $legalStatusId
 * @property \stdClass $legalName
 * @property \stdClass $ogrn
 * @property \stdClass $okpo
 * @property \stdClass $kpp
 * @property \stdClass $url
 * @property bool $hasCompanyContactGroups
 * @property CompanyAccess $access
 */
final class CompanyInfo extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'shortName' => ['string'],
        'type' => ['string'],
        'logo' => ['\stdClass'],
        'actualAddress' => ['\stdClass'],
        'phone' => ['string'],
        'countryCode' => ['string'],
        'headName' => ['\stdClass'],
        'description' => ['\stdClass'],
        'activityType' => ['\stdClass'],
        'activityTypeName' => ['\stdClass'],
        'activityTypeId' => ['\stdClass'],
        'disabled' => ['Cargomart\ApiClient\Entity\Company\Objects\DisabledFull'],
        'ordersByMonth' => ['int'],
        'isBlocked' => ['bool'],
        'partnerStatus' => ['int'],
        'partners' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\PartnerShortItem'],
        'clientId' => ['int'],
        'email' => ['\stdClass'],
        'activityTypeAlias' => ['\stdClass'],
        'operatingAccount' => ['string'],
        'bankName' => ['string'],
        'correspondingAccount' => ['string'],
        'bic' => ['string'],
        'countCreateOrder' => ['int'],
        'countWinnerOrder' => ['int'],
        'isCooperatingGeneralPartner' => ['bool'],
        'isWithVat' => ['bool'],
        'isPartnershipAllowed' => ['bool'],
        'isWithBranch' => ['bool'],
        'inn' => ['string'],
        'createDate' => ['string'],
        'registerDate' => ['string'],
        'carCount' => ['int'],
        'metrics' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyMetrics'],
        'isDirectSender' => ['bool'],
        'status' => ['int'],
        'contract' => ['Cargomart\ApiClient\Entity\Company\Objects\PartnerContract'],
        'partnerContract' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\PartnerContractWithType'],
        'isValidated' => ['bool'],
        'legalAddress' => ['string'],
        'legalStatusId' => ['int'],
        'legalName' => ['\stdClass'],
        'ogrn' => ['\stdClass'],
        'okpo' => ['\stdClass'],
        'kpp' => ['\stdClass'],
        'url' => ['\stdClass'],
        'hasCompanyContactGroups' => ['bool'],
        'access' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'shortName' => false,
        'type' => false,
        'logo' => true,
        'actualAddress' => true,
        'phone' => false,
        'countryCode' => false,
        'headName' => true,
        'description' => true,
        'activityType' => true,
        'activityTypeName' => true,
        'activityTypeId' => true,
        'disabled' => false,
        'ordersByMonth' => false,
        'isBlocked' => false,
        'partnerStatus' => false,
        'partners' => false,
        'clientId' => false,
        'email' => true,
        'activityTypeAlias' => true,
        'operatingAccount' => false,
        'bankName' => false,
        'correspondingAccount' => false,
        'bic' => false,
        'countCreateOrder' => false,
        'countWinnerOrder' => false,
        'isCooperatingGeneralPartner' => false,
        'isWithVat' => false,
        'isPartnershipAllowed' => false,
        'isWithBranch' => false,
        'inn' => false,
        'createDate' => false,
        'registerDate' => false,
        'carCount' => false,
        'metrics' => false,
        'isDirectSender' => false,
        'status' => false,
        'contract' => false,
        'partnerContract' => false,
        'isValidated' => false,
        'legalAddress' => false,
        'legalStatusId' => false,
        'legalName' => true,
        'ogrn' => true,
        'okpo' => true,
        'kpp' => true,
        'url' => true,
        'hasCompanyContactGroups' => false,
        'access' => false,
    ];
}

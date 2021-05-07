<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Модель данных ЮЛ или ИП
 * source: company/objects/company.json
 *
 * @property \stdClass $id
 * @property int $clientId
 * @property \stdClass $logo
 * @property string $shortName
 * @property \stdClass $legalName
 * @property \stdClass $actualAddress
 * @property string $legalAddress
 * @property string $phone
 * @property \stdClass $email
 * @property \stdClass $headName
 * @property bool $isPartnershipAllowed
 * @property bool $isWithVat
 * @property bool $isBlocked
 * @property bool $isWithBranch
 * @property string $inn
 * @property \stdClass $ogrn
 * @property \stdClass $okpo
 * @property \stdClass $kpp
 * @property \stdClass $url
 * @property \stdClass $description
 * @property string $type
 * @property \stdClass $bankName
 * @property \stdClass $operatingAccount
 * @property \stdClass $correspondingAccount
 * @property \stdClass $bic
 * @property int $countCreateOrder
 * @property int $countWinnerOrder
 * @property \stdClass $activityType
 * @property \stdClass $activityTypeId
 * @property \stdClass $activityTypeName
 * @property \stdClass $activityTypeAlias
 * @property \stdClass $partnerStatus
 * @property PartnerShortItem[] $partners
 * @property DisabledFull $disabled
 * @property bool $isCooperatingGeneralPartner
 * @property PartnerContract $contract
 * @property PartnerContractWithType[] $partnerContract
 * @property CompanyMetrics $metrics
 * @property string $createDate
 * @property string $registerDate
 * @property bool $isDirectSender
 * @property int $status
 * @property CompanyAccess $access
 * @property bool $isValidated
 * @property int $legalStatusId
 * @property bool $hasCompanyContactGroups
 */
final class Company extends AbstractEntity
{
    protected static $types = [
        'id' => ['\stdClass'],
        'clientId' => ['int'],
        'logo' => ['\stdClass'],
        'shortName' => ['string'],
        'legalName' => ['\stdClass'],
        'actualAddress' => ['\stdClass'],
        'legalAddress' => ['string'],
        'phone' => ['string'],
        'email' => ['\stdClass'],
        'headName' => ['\stdClass'],
        'isPartnershipAllowed' => ['bool'],
        'isWithVat' => ['bool'],
        'isBlocked' => ['bool'],
        'isWithBranch' => ['bool'],
        'inn' => ['string'],
        'ogrn' => ['\stdClass'],
        'okpo' => ['\stdClass'],
        'kpp' => ['\stdClass'],
        'url' => ['\stdClass'],
        'description' => ['\stdClass'],
        'type' => ['string'],
        'bankName' => ['\stdClass'],
        'operatingAccount' => ['\stdClass'],
        'correspondingAccount' => ['\stdClass'],
        'bic' => ['\stdClass'],
        'countCreateOrder' => ['int'],
        'countWinnerOrder' => ['int'],
        'activityType' => ['\stdClass'],
        'activityTypeId' => ['\stdClass'],
        'activityTypeName' => ['\stdClass'],
        'activityTypeAlias' => ['\stdClass'],
        'partnerStatus' => ['\stdClass'],
        'partners' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\PartnerShortItem'],
        'disabled' => ['Cargomart\ApiClient\Entity\Company\Objects\DisabledFull'],
        'isCooperatingGeneralPartner' => ['bool'],
        'contract' => ['Cargomart\ApiClient\Entity\Company\Objects\PartnerContract'],
        'partnerContract' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\PartnerContractWithType'],
        'metrics' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyMetrics'],
        'createDate' => ['string'],
        'registerDate' => ['string'],
        'isDirectSender' => ['bool'],
        'status' => ['int'],
        'access' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyAccess'],
        'isValidated' => ['bool'],
        'legalStatusId' => ['int'],
        'hasCompanyContactGroups' => ['bool'],
    ];

    protected static $nullables = [
        'id' => true,
        'clientId' => false,
        'logo' => true,
        'shortName' => false,
        'legalName' => true,
        'actualAddress' => true,
        'legalAddress' => false,
        'phone' => false,
        'email' => true,
        'headName' => true,
        'isPartnershipAllowed' => false,
        'isWithVat' => false,
        'isBlocked' => false,
        'isWithBranch' => false,
        'inn' => false,
        'ogrn' => true,
        'okpo' => true,
        'kpp' => true,
        'url' => true,
        'description' => true,
        'type' => false,
        'bankName' => true,
        'operatingAccount' => true,
        'correspondingAccount' => true,
        'bic' => true,
        'countCreateOrder' => false,
        'countWinnerOrder' => false,
        'activityType' => true,
        'activityTypeId' => true,
        'activityTypeName' => true,
        'activityTypeAlias' => true,
        'partnerStatus' => true,
        'partners' => false,
        'disabled' => false,
        'isCooperatingGeneralPartner' => false,
        'contract' => false,
        'partnerContract' => false,
        'metrics' => false,
        'createDate' => false,
        'registerDate' => false,
        'isDirectSender' => false,
        'status' => false,
        'access' => false,
        'isValidated' => false,
        'legalStatusId' => false,
        'hasCompanyContactGroups' => false,
    ];
}

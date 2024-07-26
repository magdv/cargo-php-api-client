<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Dictionary\Objects\ActivityType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\CarPerPeriod;
use Cargomart\ApiClient\Entity\Dictionary\Objects\CountryItem;
use Cargomart\ApiClient\Entity\Dictionary\Objects\Currency;
use Cargomart\ApiClient\Entity\Dictionary\Objects\DocumentType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\DriverLicense;
use Cargomart\ApiClient\Entity\Dictionary\Objects\ExpeditorTaskType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\LegalStatus;
use Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\PaymentType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\Section;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TenderCarriage;
use Cargomart\ApiClient\Entity\Dictionary\Objects\Timezone;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TrailerType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckDevice;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckMode;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\Vat;
use Cargomart\ApiClient\Entity\Order\Objects\OrderCondition;
use Cargomart\ApiClient\Entity\Order\Objects\OrderPriceTypeItem;
use Cargomart\ApiClient\Entity\Order\Objects\OrderRefuseReasonItem;
use Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OrderDocumentType;
use Cargomart\ApiClient\Entity\SimpleDocument\Objects\SimpleDocumentTitleType;

/**
 * Словари
 * source: dictionary/responses/dictionary-list.json#/properties/data
 *
 * @property ActivityType[] $activityType
 * @property Currency[] $currency
 * @property DocumentType[] $documentType
 * @property DriverLicense[] $driverLicense
 * @property LoadingType[] $loadingType
 * @property OrderCondition[] $orderCondition
 * @property PaymentType[] $paymentType
 * @property OrderPriceTypeItem[] $priceType
 * @property OrderRefuseReasonItem[] $refuseReason
 * @property Timezone[] $timezone
 * @property TruckMode[] $truckMode
 * @property TruckType[] $truckType
 * @property TrailerType[] $trailerType
 * @property TruckDevice[] $truckDevice
 * @property Vat[] $vat
 * @property Section[] $section
 * @property CarPerPeriod[] $carPerPeriod
 * @property TenderCarriage[] $tenderCarriage
 * @property LegalStatus[] $legalStatus
 * @property OrderDocumentType[] $orderDocumentType
 * @property SimpleDocumentTitleType[] $simpleDocumentTitleType
 * @property CountryItem[] $country
 * @property ExpeditorTaskType[] $expeditorTaskType
 */
final class DictionaryListData extends AbstractEntity
{
    protected static $types = [
        'activityType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\ActivityType'],
        'currency' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\Currency'],
        'documentType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\DocumentType'],
        'driverLicense' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\DriverLicense'],
        'loadingType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType'],
        'orderCondition' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderCondition'],
        'paymentType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\PaymentType'],
        'priceType' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderPriceTypeItem'],
        'refuseReason' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderRefuseReasonItem'],
        'timezone' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\Timezone'],
        'truckMode' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckMode'],
        'truckType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType'],
        'trailerType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TrailerType'],
        'truckDevice' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckDevice'],
        'vat' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\Vat'],
        'section' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\Section'],
        'carPerPeriod' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\CarPerPeriod'],
        'tenderCarriage' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TenderCarriage'],
        'legalStatus' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\LegalStatus'],
        'orderDocumentType' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderDocument\Objects\OrderDocumentType'],
        'simpleDocumentTitleType' => ['array', 'Cargomart\ApiClient\Entity\SimpleDocument\Objects\SimpleDocumentTitleType'],
        'country' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\CountryItem'],
        'expeditorTaskType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\ExpeditorTaskType'],
    ];

    protected static $nullables = [
        'activityType' => false,
        'currency' => false,
        'documentType' => false,
        'driverLicense' => false,
        'loadingType' => false,
        'orderCondition' => false,
        'paymentType' => false,
        'priceType' => false,
        'refuseReason' => false,
        'timezone' => false,
        'truckMode' => false,
        'truckType' => false,
        'trailerType' => false,
        'truckDevice' => false,
        'vat' => false,
        'section' => false,
        'carPerPeriod' => false,
        'tenderCarriage' => false,
        'legalStatus' => false,
        'orderDocumentType' => false,
        'simpleDocumentTitleType' => false,
        'country' => false,
        'expeditorTaskType' => false,
    ];
}

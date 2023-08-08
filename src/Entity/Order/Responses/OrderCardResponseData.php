<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\ContractType\Objects\ContractType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\Currency;
use Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckDevice;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckMode;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType;
use Cargomart\ApiClient\Entity\Driver\Models\DriverOld;
use Cargomart\ApiClient\Entity\File\Objects\Document;
use Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerContract;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Order\Objects\MonitoringItem;
use Cargomart\ApiClient\Entity\Order\Objects\OrderCardFull;
use Cargomart\ApiClient\Entity\Order\Objects\OrderCondition;
use Cargomart\ApiClient\Entity\Order\Objects\OrderRefuseReasonItem;
use Cargomart\ApiClient\Entity\Order\Objects\OrderStatus;
use Cargomart\ApiClient\Entity\Order\Objects\StoragePointExport;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\ContactItem;
use Cargomart\ApiClient\Entity\Truck\Objects\TruckOld;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Common response data
 * source: order/responses/order-card-response.json#/properties/data
 *
 * @property OrderCardFull $order
 * @property TruckType[] $truckType
 * @property StoragePointExport[] $storagePoint
 * @property ContactItem[] $storagePointContact
 * @property CompanyShort[] $company
 * @property CompanyBranch[] $companyBranch
 * @property UserContactShort[] $contact
 * @property TruckDevice[] $device
 * @property OrderCondition[] $condition
 * @property LoadingType[] $loadingType
 * @property Locality[] $locality
 * @property OrderStatus[] $status
 * @property Currency[] $currency
 * @property bool $isMultiCurrency
 * @property string $serverTime
 * @property Document[] $proxy
 * @property Document[] $document
 * @property DriverOld[] $driver
 * @property TruckOld[] $truck
 * @property TruckMode[] $truckMode
 * @property GeneralPartnerContract[] $generalPartnerContract
 * @property MonitoringItem[] $monitoring
 * @property OrderRefuseReasonItem $refuseReason
 * @property ContractType $contractType
 */
final class OrderCardResponseData extends AbstractEntity
{
    protected static $types = [
        'order' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderCardFull'],
        'truckType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType'],
        'storagePoint' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\StoragePointExport'],
        'storagePointContact' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\ContactItem'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'companyBranch' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'device' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckDevice'],
        'condition' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderCondition'],
        'loadingType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'status' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderStatus'],
        'currency' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\Currency'],
        'isMultiCurrency' => ['bool'],
        'serverTime' => ['string'],
        'proxy' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\Document'],
        'document' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\Document'],
        'driver' => ['array', 'Cargomart\ApiClient\Entity\Driver\Models\DriverOld'],
        'truck' => ['array', 'Cargomart\ApiClient\Entity\Truck\Objects\TruckOld'],
        'truckMode' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckMode'],
        'generalPartnerContract' => ['array', 'Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerContract'],
        'monitoring' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\MonitoringItem'],
        'refuseReason' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderRefuseReasonItem'],
        'contractType' => ['Cargomart\ApiClient\Entity\ContractType\Objects\ContractType'],
    ];

    protected static $nullables = [
        'order' => false,
        'truckType' => false,
        'storagePoint' => false,
        'storagePointContact' => false,
        'company' => false,
        'companyBranch' => false,
        'contact' => false,
        'device' => false,
        'condition' => false,
        'loadingType' => false,
        'locality' => false,
        'status' => false,
        'currency' => false,
        'isMultiCurrency' => false,
        'serverTime' => false,
        'proxy' => false,
        'document' => false,
        'driver' => false,
        'truck' => false,
        'truckMode' => false,
        'generalPartnerContract' => false,
        'monitoring' => false,
        'refuseReason' => false,
        'contractType' => false,
    ];
}

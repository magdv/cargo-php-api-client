<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Dictionary\Objects\Currency;
use Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckDevice;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType;
use Cargomart\ApiClient\Entity\Driver\Models\DriverOld;
use Cargomart\ApiClient\Entity\File\Objects\Document;
use Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerContract;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Order\Objects\MonitoringItem;
use Cargomart\ApiClient\Entity\Order\Objects\OrderCondition;
use Cargomart\ApiClient\Entity\Order\Objects\OrderShortListItem;
use Cargomart\ApiClient\Entity\Order\Objects\OrderStatus;
use Cargomart\ApiClient\Entity\Truck\Objects\TruckOld;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Common response data
 * source: order/responses/order-list-response.json#/properties/data
 *
 * @property OrderShortListItem[] $order
 * @property CompanyShort[] $company
 * @property CompanyBranch[] $companyBranch
 * @property UserContactShort[] $contact
 * @property TruckType[] $truckType
 * @property DriverOld[] $driver
 * @property TruckOld[] $truck
 * @property TruckDevice[] $device
 * @property OrderCondition[] $condition
 * @property LoadingType[] $loadingType
 * @property Pagination $pagination
 * @property string $serverTime
 * @property OrderStatus[] $status
 * @property Currency[] $currency
 * @property Locality[] $locality
 * @property Document[] $proxy
 * @property Document[] $document
 * @property GeneralPartnerContract[] $generalPartnerContract
 * @property MonitoringItem[] $monitoring
 */
final class OrderListResponseData extends AbstractEntity
{
    protected static $types = [
        'order' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderShortListItem'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'companyBranch' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'truckType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType'],
        'driver' => ['array', 'Cargomart\ApiClient\Entity\Driver\Models\DriverOld'],
        'truck' => ['array', 'Cargomart\ApiClient\Entity\Truck\Objects\TruckOld'],
        'device' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckDevice'],
        'condition' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderCondition'],
        'loadingType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
        'serverTime' => ['string'],
        'status' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderStatus'],
        'currency' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\Currency'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'proxy' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\Document'],
        'document' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\Document'],
        'generalPartnerContract' => ['array', 'Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerContract'],
        'monitoring' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\MonitoringItem'],
    ];

    protected static $nullables = [
        'order' => false,
        'company' => false,
        'companyBranch' => false,
        'contact' => false,
        'truckType' => false,
        'driver' => false,
        'truck' => false,
        'device' => false,
        'condition' => false,
        'loadingType' => false,
        'pagination' => false,
        'serverTime' => false,
        'status' => false,
        'currency' => false,
        'locality' => false,
        'proxy' => false,
        'document' => false,
        'generalPartnerContract' => false,
        'monitoring' => false,
    ];
}

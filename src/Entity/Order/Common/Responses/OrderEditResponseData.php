<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Dictionary\Objects\Currency;
use Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckDevice;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckMode;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType;
use Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerContract;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderCondition;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderEditItem;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderStatus;
use Cargomart\ApiClient\Entity\Order\Common\Objects\ProgressItemListProgress;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\ContactItem;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\PointItem;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Common response data
 * source: order/Common/responses/order-edit-response.json#/properties/data
 *
 * @property OrderEditItem $order
 * @property CompanyShort[] $company
 * @property CompanyBranch[] $companyBranch
 * @property OrderCondition[] $condition
 * @property UserContactShort[] $contact
 * @property Currency[] $currency
 * @property TruckDevice[] $device
 * @property GeneralPartnerContract[] $generalPartnerContract
 * @property LoadingType[] $loadingType
 * @property Locality[] $locality
 * @property ProgressItemListProgress[] $progress
 * @property string $serverTime
 * @property OrderStatus[] $status
 * @property PointItem[] $storagePoint
 * @property ContactItem[] $storagePointContact
 * @property TruckMode[] $truckMode
 * @property TruckType[] $truckType
 */
final class OrderEditResponseData extends AbstractEntity
{
    protected static $types = [
        'order' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderEditItem'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'companyBranch' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch'],
        'condition' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\OrderCondition'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'currency' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\Currency'],
        'device' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckDevice'],
        'generalPartnerContract' => ['array', 'Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerContract'],
        'loadingType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'progress' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\ProgressItemListProgress'],
        'serverTime' => ['string'],
        'status' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\OrderStatus'],
        'storagePoint' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\PointItem'],
        'storagePointContact' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\ContactItem'],
        'truckMode' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckMode'],
        'truckType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType'],
    ];

    protected static $nullables = [
        'order' => false,
        'company' => false,
        'companyBranch' => false,
        'condition' => false,
        'contact' => false,
        'currency' => false,
        'device' => false,
        'generalPartnerContract' => false,
        'loadingType' => false,
        'locality' => false,
        'progress' => false,
        'serverTime' => false,
        'status' => false,
        'storagePoint' => false,
        'storagePointContact' => false,
        'truckMode' => false,
        'truckType' => false,
    ];
}

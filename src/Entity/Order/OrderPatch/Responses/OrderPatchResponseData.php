<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderPatch\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch;
use Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckDevice;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckMode;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Order\Objects\OrderCondition;
use Cargomart\ApiClient\Entity\Order\Objects\OrderShort;
use Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchItem;
use Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchStatusType;

/**
 * source: order/OrderPatch/responses/order-patch-response.json#/properties/data
 *
 * @property CompanyBranch[] $companyBranch
 * @property TruckType[] $truckType
 * @property TruckMode[] $truckMode
 * @property LoadingType[] $loadingType
 * @property TruckDevice[] $device
 * @property OrderCondition[] $condition
 * @property Locality[] $locality
 * @property OrderShort $order
 * @property OrderPatchStatusType[] $orderPatchStatuses
 * @property OrderPatchItem $orderPatch
 */
final class OrderPatchResponseData extends AbstractEntity
{
    protected static $types = [
        'companyBranch' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch'],
        'truckType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType'],
        'truckMode' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckMode'],
        'loadingType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\LoadingType'],
        'device' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckDevice'],
        'condition' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderCondition'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'order' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderShort'],
        'orderPatchStatuses' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchStatusType'],
        'orderPatch' => ['Cargomart\ApiClient\Entity\Order\OrderPatch\Objects\OrderPatchItem'],
    ];

    protected static $nullables = [
        'companyBranch' => false,
        'truckType' => false,
        'truckMode' => false,
        'loadingType' => false,
        'device' => false,
        'condition' => false,
        'locality' => false,
        'order' => false,
        'orderPatchStatuses' => false,
        'orderPatch' => false,
    ];
}

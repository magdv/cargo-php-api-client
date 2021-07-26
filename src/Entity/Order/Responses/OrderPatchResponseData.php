<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckDevice;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Order\Objects\OrderCondition;
use Cargomart\ApiClient\Entity\Order\Objects\OrderPatchItem;
use Cargomart\ApiClient\Entity\Order\Objects\OrderPatchStatusType;

/**
 * source: order/responses/order-patch-response.json#/properties/data
 *
 * @property CompanyBranch[] $companyBranch
 * @property TruckType[] $truckType
 * @property TruckDevice[] $device
 * @property OrderCondition[] $condition
 * @property Locality[] $locality
 * @property OrderPatchStatusType[] $orderPatchStatuses
 * @property OrderPatchItem $orderPatch
 */
final class OrderPatchResponseData extends AbstractEntity
{
    protected static $types = [
        'companyBranch' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch'],
        'truckType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType'],
        'device' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckDevice'],
        'condition' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderCondition'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'orderPatchStatuses' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderPatchStatusType'],
        'orderPatch' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPatchItem'],
    ];

    protected static $nullables = [
        'companyBranch' => false,
        'truckType' => false,
        'device' => false,
        'condition' => false,
        'locality' => false,
        'orderPatchStatuses' => false,
        'orderPatch' => false,
    ];
}

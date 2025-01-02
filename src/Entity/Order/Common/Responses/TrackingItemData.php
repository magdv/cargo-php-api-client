<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Order\Common\Objects\Tracking;

/**
 * Common response data
 * source: order/Common/responses/tracking-item.json#/properties/data
 *
 * @property Tracking $tracking
 * @property Locality[] $locality
 * @property TruckType[] $truckType
 * @property CompanyShort[] $company
 */
final class TrackingItemData extends AbstractEntity
{
    protected static $types = [
        'tracking' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\Tracking'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'truckType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
    ];

    protected static $nullables = ['tracking' => false, 'locality' => false, 'truckType' => false, 'company' => false];
}

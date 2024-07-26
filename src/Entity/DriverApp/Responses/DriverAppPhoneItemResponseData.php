<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DriverApp\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Objects\DriverAppDetail;

/**
 * source: driver-app/responses/driver-app-phone-item-response.json#/properties/data
 *
 * @property DriverAppDetail $driverAppDetail
 */
final class DriverAppPhoneItemResponseData extends AbstractEntity
{
    protected static $types = ['driverAppDetail' => ['Cargomart\ApiClient\Entity\Base\Objects\DriverAppDetail']];
    protected static $nullables = ['driverAppDetail' => false];
}

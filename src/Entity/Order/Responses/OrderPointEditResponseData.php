<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-point-edit-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Order\Objects\OrderEditItem;
use Cargomart\ApiClient\Entity\Order\Objects\ProgressItem;
use Cargomart\ApiClient\Entity\Order\Objects\RoutePointEdit;
use Cargomart\ApiClient\Entity\Order\Objects\StoragePointExport;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\ContactItem;

/**
 * Common response data
 * source: order/responses/order-point-edit-response.json#/properties/data
 *
 * @property RoutePointEdit $point
 * @property ProgressItem[] $progress
 * @property StoragePointExport[] $storagePoint
 * @property ContactItem[] $storagePointContact
 * @property Locality[] $locality
 * @property OrderEditItem $order
 */
final class OrderPointEditResponseData extends AbstractEntity
{
    protected static $types = [
        'point' => ['Cargomart\ApiClient\Entity\Order\Objects\RoutePointEdit'],
        'progress' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\ProgressItem'],
        'storagePoint' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\StoragePointExport'],
        'storagePointContact' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\ContactItem'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'order' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderEditItem'],
    ];

    protected static $nullables = [
        'point' => false,
        'progress' => false,
        'storagePoint' => false,
        'storagePointContact' => false,
        'locality' => false,
        'order' => false,
    ];
}

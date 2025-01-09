<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorTask\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\IdIntName;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDriver;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderRoutePoint;

/**
 * Объект задачи
 * source: expeditor-task/objects/expeditor-task.json
 *
 * @property int $id
 * @property string $activateDate
 * @property string $expireDate
 * @property string $freezeTillDate
 * @property IdIntName $worker
 * @property string $type
 * @property string $status
 * @property string $orderId
 * @property int $serialId
 * @property OrderDriver $driver
 * @property OrderRoutePoint $routePoint
 * @property string $chatId
 * @property ExpeditorTaskAccess $access
 */
final class ExpeditorTask extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'activateDate' => ['string'],
        'expireDate' => ['string'],
        'freezeTillDate' => ['string'],
        'worker' => ['Cargomart\ApiClient\Entity\Base\IdIntName'],
        'type' => ['string'],
        'status' => ['string'],
        'orderId' => ['string'],
        'serialId' => ['int'],
        'driver' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDriver'],
        'routePoint' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderRoutePoint'],
        'chatId' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\ExpeditorTask\Objects\ExpeditorTaskAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'activateDate' => false,
        'expireDate' => false,
        'freezeTillDate' => false,
        'worker' => false,
        'type' => false,
        'status' => false,
        'orderId' => false,
        'serialId' => false,
        'driver' => false,
        'routePoint' => false,
        'chatId' => false,
        'access' => false,
    ];
}

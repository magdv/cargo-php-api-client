<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/route-point-short.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Пункт маршрута
 * source: order/objects/route-point-short.json
 *
 * @property int $id
 * @property string $title
 * @property int $serialId
 * @property string $localityName
 * @property string $code
 * @property string $fromDate
 * @property string $toDate
 * @property string $fromTime
 * @property string $toTime
 * @property string $additionalInfo
 */
final class RoutePointShort extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'title' => ['string'],
        'serialId' => ['int'],
        'localityName' => ['string'],
        'code' => ['string'],
        'fromDate' => ['string'],
        'toDate' => ['string'],
        'fromTime' => ['string'],
        'toTime' => ['string'],
        'additionalInfo' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'title' => false,
        'serialId' => false,
        'localityName' => false,
        'code' => false,
        'fromDate' => false,
        'toDate' => false,
        'fromTime' => false,
        'toTime' => false,
        'additionalInfo' => false,
    ];
}

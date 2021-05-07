<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;

/**
 * Пункт маршрута
 * source: order/objects/small-carrier-route-point.json
 *
 * @property string $localityName
 * @property string $code
 * @property string $fromDate
 * @property string $fromTime
 * @property string $toTime
 * @property Locality $locality
 */
final class SmallCarrierRoutePoint extends AbstractEntity
{
    protected static $types = [
        'localityName' => ['string'],
        'code' => ['string'],
        'fromDate' => ['string'],
        'fromTime' => ['string'],
        'toTime' => ['string'],
        'locality' => ['Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
    ];

    protected static $nullables = [
        'localityName' => false,
        'code' => false,
        'fromDate' => false,
        'fromTime' => false,
        'toTime' => false,
        'locality' => false,
    ];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/tracking-count-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: order/responses/tracking-count-response.json#/properties/data
 *
 * @property int $count
 */
final class TrackingCountResponseData extends AbstractEntity
{
    protected static $types = ['count' => ['int']];
    protected static $nullables = ['count' => false];
}

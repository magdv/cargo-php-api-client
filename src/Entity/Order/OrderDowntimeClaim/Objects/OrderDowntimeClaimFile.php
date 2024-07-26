<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\FileV2;

/**
 * Файлы непосредственно самой претензии
 * source: order/OrderDowntimeClaim/objects/order-downtime-claim.json#/properties/file
 *
 * @property FileV2 $preview
 */
final class OrderDowntimeClaimFile extends AbstractEntity
{
    protected static $types = ['preview' => ['Cargomart\ApiClient\Entity\File\Objects\FileV2']];
    protected static $nullables = ['preview' => false];
}

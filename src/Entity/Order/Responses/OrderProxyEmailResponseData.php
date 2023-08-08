<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderProxyEmailItem;

/**
 * Список email для точек погрузки
 * source: order/responses/order-proxy-email-response.json#/properties/data
 *
 * @property OrderProxyEmailItem[] $emailItems
 */
final class OrderProxyEmailResponseData extends AbstractEntity
{
    protected static $types = ['emailItems' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderProxyEmailItem']];
    protected static $nullables = ['emailItems' => false];
}

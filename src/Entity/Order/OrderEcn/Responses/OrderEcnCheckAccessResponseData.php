<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderEcn\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\CheckItem;

/**
 * Данные
 * source: order/OrderEcn/responses/order-ecn-check-access-response.json#/properties/data
 *
 * @property CheckItem[] $check
 */
final class OrderEcnCheckAccessResponseData extends AbstractEntity
{
    protected static $types = ['check' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\CheckItem']];
    protected static $nullables = ['check' => false];
}

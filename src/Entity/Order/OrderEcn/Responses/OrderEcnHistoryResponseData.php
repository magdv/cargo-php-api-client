<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderEcn\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderEcn\Objects\OrderEcnHistory;

/**
 * Данные
 * source: order/OrderEcn/responses/order-ecn-history-response.json#/properties/data
 *
 * @property OrderEcnHistory[] $history
 */
final class OrderEcnHistoryResponseData extends AbstractEntity
{
    protected static $types = ['history' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderEcn\Objects\OrderEcnHistory']];
    protected static $nullables = ['history' => false];
}

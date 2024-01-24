<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Условия перевозки по направлению
 * source: order/objects/order-draft-ftl-conditions.json
 *
 * @property float $vatRate
 */
final class OrderDraftFtlConditions extends AbstractEntity
{
    protected static $types = ['vatRate' => ['float']];
    protected static $nullables = ['vatRate' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\OrderConditions\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\OrderConditions\Objects\OrderConditions;

/**
 * Данные условий перевозки
 * source: order-conditions/responses/order-conditions-response.json#/properties/data
 *
 * @property OrderConditions $orderConditions
 */
final class OrderConditionsResponseData extends AbstractEntity
{
    protected static $types = ['orderConditions' => ['Cargomart\ApiClient\Entity\OrderConditions\Objects\OrderConditions']];
    protected static $nullables = ['orderConditions' => false];
}

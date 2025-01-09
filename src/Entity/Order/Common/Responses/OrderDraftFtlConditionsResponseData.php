<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftFtlConditions;

/**
 * Данные условий перевозки
 * source: order/Common/responses/order-draft-ftl-conditions-response.json#/properties/data
 *
 * @property OrderDraftFtlConditions $conditions
 */
final class OrderDraftFtlConditionsResponseData extends AbstractEntity
{
    protected static $types = ['conditions' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftFtlConditions']];
    protected static $nullables = ['conditions' => false];
}

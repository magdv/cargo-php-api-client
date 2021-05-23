<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderAdditionalInfoWaybill;

/**
 * Имеющиеся добавочные данные
 * source: order/responses/order-additional-info-waybill-response.json#/properties/data
 *
 * @property OrderAdditionalInfoWaybill $filled
 */
final class OrderAdditionalInfoWaybillResponseData extends AbstractEntity
{
    protected static $types = ['filled' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderAdditionalInfoWaybill']];
    protected static $nullables = ['filled' => false];
}

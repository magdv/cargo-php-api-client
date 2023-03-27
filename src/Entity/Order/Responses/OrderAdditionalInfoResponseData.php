<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-additional-info-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderAdditionalInfo;

/**
 * Имеющиеся добавочные данные
 * source: order/responses/order-additional-info-response.json#/properties/data
 *
 * @property OrderAdditionalInfo $filled
 */
final class OrderAdditionalInfoResponseData extends AbstractEntity
{
    protected static $types = ['filled' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderAdditionalInfo']];
    protected static $nullables = ['filled' => false];
}

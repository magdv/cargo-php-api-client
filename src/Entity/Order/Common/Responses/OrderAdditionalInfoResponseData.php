<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderAdditionalInfo;

/**
 * Имеющиеся добавочные данные
 * source: order/Common/responses/order-additional-info-response.json#/properties/data
 *
 * @property OrderAdditionalInfo $filled
 */
final class OrderAdditionalInfoResponseData extends AbstractEntity
{
    protected static $types = ['filled' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderAdditionalInfo']];
    protected static $nullables = ['filled' => false];
}

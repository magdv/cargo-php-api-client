<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-refuse-reasons-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderRefuseReasonItem;

/**
 * Common response data
 * source: order/responses/order-refuse-reasons-response.json#/properties/data
 *
 * @property OrderRefuseReasonItem[] $refuseReason
 */
final class OrderRefuseReasonsResponseData extends AbstractEntity
{
    protected static $types = [
        'refuseReason' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderRefuseReasonItem'],
    ];

    protected static $nullables = ['refuseReason' => false];
}

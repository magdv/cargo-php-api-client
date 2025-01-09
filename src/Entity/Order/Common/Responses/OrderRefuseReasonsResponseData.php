<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderRefuseReasonItem;

/**
 * Common response data
 * source: order/Common/responses/order-refuse-reasons-response.json#/properties/data
 *
 * @property OrderRefuseReasonItem[] $refuseReason
 */
final class OrderRefuseReasonsResponseData extends AbstractEntity
{
    protected static $types = [
        'refuseReason' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\OrderRefuseReasonItem'],
    ];

    protected static $nullables = ['refuseReason' => false];
}

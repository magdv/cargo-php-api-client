<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список оплат по счёту
 * source: order/responses/order-payment-response.json
 *
 * @property OrderPaymentResponseData $data
 */
final class OrderPaymentResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderPaymentResponseData']];
    protected static $nullables = ['data' => false];
}

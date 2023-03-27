<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-payment-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список оплат по счёту
 * source: order/responses/order-payment-response.json
 *
 * @property MessageV2[] $message
 * @property OrderPaymentResponseData $data
 */
final class OrderPaymentResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderPaymentResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

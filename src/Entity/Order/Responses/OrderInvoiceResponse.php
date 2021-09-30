<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Объект платежей
 * source: order/responses/order-invoice-response.json
 *
 * @property MessageV2[] $message
 * @property OrderInvoiceResponseData $data
 */
final class OrderInvoiceResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderInvoiceResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

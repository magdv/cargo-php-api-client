<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Объект платежей
 * source: order/responses/order-invoice-response.json
 *
 * @property OrderInvoiceResponseData $data
 */
final class OrderInvoiceResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderInvoiceResponseData']];
    protected static $nullables = ['data' => false];
}

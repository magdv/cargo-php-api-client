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
 * source: order/responses/expeditor-payment-response.json
 *
 * @property ExpeditorPaymentResponseData $data
 */
final class ExpeditorPaymentResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\ExpeditorPaymentResponseData']];
    protected static $nullables = ['data' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderExpeditorPayment\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderExpeditorPayment\Objects\ExpeditorPayment;

/**
 * source: order/OrderExpeditorPayment/responses/expeditor-payment-response.json#/properties/data
 *
 * @property ExpeditorPayment $expeditorPayment
 */
final class ExpeditorPaymentResponseData extends AbstractEntity
{
    protected static $types = [
        'expeditorPayment' => ['Cargomart\ApiClient\Entity\Order\OrderExpeditorPayment\Objects\ExpeditorPayment'],
    ];

    protected static $nullables = ['expeditorPayment' => false];
}

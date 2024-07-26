<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\ExpeditorPayment\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\ExpeditorPayment\Objects\ExpeditorPayment;

/**
 * source: order/ExpeditorPayment/responses/expeditor-payment-response.json#/properties/data
 *
 * @property ExpeditorPayment $expeditorPayment
 */
final class ExpeditorPaymentResponseData extends AbstractEntity
{
    protected static $types = [
        'expeditorPayment' => ['Cargomart\ApiClient\Entity\Order\ExpeditorPayment\Objects\ExpeditorPayment'],
    ];

    protected static $nullables = ['expeditorPayment' => false];
}

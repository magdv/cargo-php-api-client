<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\ExpeditorPayment;

/**
 * source: order/responses/expeditor-payment-response.json#/properties/data
 *
 * @property ExpeditorPayment $expeditorPayment
 */
final class ExpeditorPaymentResponseData extends AbstractEntity
{
    protected static $types = ['expeditorPayment' => ['Cargomart\ApiClient\Entity\Order\Objects\ExpeditorPayment']];
    protected static $nullables = ['expeditorPayment' => false];
}

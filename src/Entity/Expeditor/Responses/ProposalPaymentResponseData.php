<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/responses/proposal-payment-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\ExpeditorPayment;

/**
 * source: expeditor/responses/proposal-payment-response.json#/properties/data
 *
 * @property ExpeditorPayment $expeditorPayment
 */
final class ProposalPaymentResponseData extends AbstractEntity
{
    protected static $types = ['expeditorPayment' => ['Cargomart\ApiClient\Entity\Order\Objects\ExpeditorPayment']];
    protected static $nullables = ['expeditorPayment' => false];
}

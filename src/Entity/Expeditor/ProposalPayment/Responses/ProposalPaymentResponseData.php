<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\ProposalPayment\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderExpeditorPayment\Objects\ExpeditorPayment;

/**
 * source: expeditor/ProposalPayment/responses/proposal-payment-response.json#/properties/data
 *
 * @property ExpeditorPayment $expeditorPayment
 */
final class ProposalPaymentResponseData extends AbstractEntity
{
    protected static $types = [
        'expeditorPayment' => ['Cargomart\ApiClient\Entity\Order\OrderExpeditorPayment\Objects\ExpeditorPayment'],
    ];

    protected static $nullables = ['expeditorPayment' => false];
}

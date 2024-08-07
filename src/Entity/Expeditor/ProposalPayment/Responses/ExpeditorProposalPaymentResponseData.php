<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\ProposalPayment\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Payment\Models\Payment;

/**
 * Список оплат по счёту
 * source: expeditor/ProposalPayment/responses/expeditor-proposal-payment-response.json#/properties/data
 *
 * @property Payment[] $payment
 */
final class ExpeditorProposalPaymentResponseData extends AbstractEntity
{
    protected static $types = ['payment' => ['array', 'Cargomart\ApiClient\Entity\Payment\Models\Payment']];
    protected static $nullables = ['payment' => false];
}

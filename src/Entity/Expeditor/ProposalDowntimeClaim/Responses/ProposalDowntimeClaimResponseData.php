<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\ProposalDowntimeClaim\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Expeditor\ProposalPayment\Responses\ProposalPaymentResponse;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim;

/**
 * source: expeditor/ProposalDowntimeClaim/responses/proposal-downtime-claim-response.json#/properties/data
 *
 * @property OrderDowntimeClaim $orderDowntimeClaim
 * @property ProposalPaymentResponse[] $payments
 */
final class ProposalDowntimeClaimResponseData extends AbstractEntity
{
    protected static $types = [
        'orderDowntimeClaim' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim'],
        'payments' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\ProposalPayment\Responses\ProposalPaymentResponse'],
    ];

    protected static $nullables = ['orderDowntimeClaim' => false, 'payments' => false];
}

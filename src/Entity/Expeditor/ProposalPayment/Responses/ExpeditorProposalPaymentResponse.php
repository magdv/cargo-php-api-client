<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\ProposalPayment\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список оплат по счёту
 * source: expeditor/ProposalPayment/responses/expeditor-proposal-payment-response.json
 *
 * @property ExpeditorProposalPaymentResponseData $data
 * @property MessageV2[] $message
 */
final class ExpeditorProposalPaymentResponse extends AbstractEntity
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\ProposalPayment\Responses\ExpeditorProposalPaymentResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}

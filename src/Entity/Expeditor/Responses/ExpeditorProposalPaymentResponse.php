<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список оплат по счёту
 * source: expeditor/responses/expeditor-proposal-payment-response.json
 *
 * @property ExpeditorProposalPaymentResponseData $data
 */
final class ExpeditorProposalPaymentResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ExpeditorProposalPaymentResponseData'],
    ];

    protected static $nullables = ['data' => false];
}

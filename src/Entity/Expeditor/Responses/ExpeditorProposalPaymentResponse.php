<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список оплат по счёту
 * source: expeditor/responses/expeditor-proposal-payment-response.json
 *
 * @property MessageV2[] $message
 * @property ExpeditorProposalPaymentResponseData $data
 */
final class ExpeditorProposalPaymentResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ExpeditorProposalPaymentResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

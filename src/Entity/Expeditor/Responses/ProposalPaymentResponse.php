<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/responses/proposal-payment-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Объект платежей
 * source: expeditor/responses/proposal-payment-response.json
 *
 * @property MessageV2[] $message
 * @property ProposalPaymentResponseData $data
 */
final class ProposalPaymentResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalPaymentResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

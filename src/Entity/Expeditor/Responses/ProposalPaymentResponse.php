<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Объект платежей
 * source: expeditor/responses/proposal-payment-response.json
 *
 * @property ProposalPaymentResponseData $data
 */
final class ProposalPaymentResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalPaymentResponseData']];
    protected static $nullables = ['data' => false];
}

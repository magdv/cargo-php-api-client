<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ на запрос шага ставки по цене
 * source: order/responses/order-draft-step-bid-response.json
 *
 * @property OrderDraftStepBidResponseData $data
 */
final class OrderDraftStepBidResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderDraftStepBidResponseData']];
    protected static $nullables = ['data' => false];
}

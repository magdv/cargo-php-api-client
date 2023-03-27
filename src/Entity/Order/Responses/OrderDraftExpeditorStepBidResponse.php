<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-draft-expeditor-step-bid-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ на запрос шага ставки по цене
 * source: order/responses/order-draft-expeditor-step-bid-response.json
 *
 * @property MessageV2[] $message
 * @property OrderDraftExpeditorStepBidResponseData $data
 */
final class OrderDraftExpeditorStepBidResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderDraftExpeditorStepBidResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

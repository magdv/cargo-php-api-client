<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Данные в виде заказа и запроса на изменение, который его меняет
 * source: order/responses/order-correction-history-response.json
 *
 * @property MessageV2[] $message
 * @property OrderCorrectionHistoryResponseData $data
 */
final class OrderCorrectionHistoryResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderCorrectionHistoryResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

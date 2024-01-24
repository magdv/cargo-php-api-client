<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Данные в виде заказа и запроса на изменение, который его меняет
 * source: order/responses/order-correction-history-response.json
 *
 * @property OrderCorrectionHistoryResponseData $data
 */
final class OrderCorrectionHistoryResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderCorrectionHistoryResponseData']];
    protected static $nullables = ['data' => false];
}

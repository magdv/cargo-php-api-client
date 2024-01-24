<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ на запрос цены маршрута
 * source: order/responses/order-draft-expeditor-price-response.json
 *
 * @property OrderDraftExpeditorPriceResponseData $data
 */
final class OrderDraftExpeditorPriceResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderDraftExpeditorPriceResponseData'],
    ];

    protected static $nullables = ['data' => false];
}

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
 * source: order/responses/order-draft-expeditor-price-v2-response.json
 *
 * @property OrderDraftExpeditorPriceV2ResponseData $data
 */
final class OrderDraftExpeditorPriceV2Response extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderDraftExpeditorPriceV2ResponseData'],
    ];

    protected static $nullables = ['data' => false];
}

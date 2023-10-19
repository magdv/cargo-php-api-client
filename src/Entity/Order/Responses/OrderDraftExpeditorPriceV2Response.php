<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ на запрос цены маршрута
 * source: order/responses/order-draft-expeditor-price-v2-response.json
 *
 * @property MessageV2[] $message
 * @property OrderDraftExpeditorPriceV2ResponseData $data
 */
final class OrderDraftExpeditorPriceV2Response extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderDraftExpeditorPriceV2ResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

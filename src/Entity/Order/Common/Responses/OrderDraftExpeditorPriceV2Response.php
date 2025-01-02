<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ на запрос цены маршрута
 * source: order/Common/responses/order-draft-expeditor-price-v2-response.json
 *
 * @property OrderDraftExpeditorPriceV2ResponseData $data
 * @property MessageV2[] $message
 */
final class OrderDraftExpeditorPriceV2Response extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Order\Common\Responses\OrderDraftExpeditorPriceV2ResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}

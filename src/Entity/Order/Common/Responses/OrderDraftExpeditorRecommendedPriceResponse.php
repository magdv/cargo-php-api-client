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
 * Ответ на запрос рекомендованной цены маршрута для Экспедиторского заказа
 * source: order/Common/responses/OrderDraftExpeditorRecommendedPriceResponse.json
 *
 * @property OrderDraftExpeditorRecommendedPriceResponseData $data
 * @property MessageV2[] $message
 */
final class OrderDraftExpeditorRecommendedPriceResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Order\Common\Responses\OrderDraftExpeditorRecommendedPriceResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}

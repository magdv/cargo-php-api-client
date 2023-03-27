<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-search-criteria-list-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ со списком машин и критериев поиска по заказам для них
 * source: order/responses/order-search-criteria-list-response.json
 *
 * @property MessageV2[] $message
 * @property OrderSearchCriteriaListResponseData $data
 */
final class OrderSearchCriteriaListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderSearchCriteriaListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

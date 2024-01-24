<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ со списком машин и критериев поиска по заказам для них
 * source: order/responses/order-search-criteria-list-response.json
 *
 * @property OrderSearchCriteriaListResponseData $data
 */
final class OrderSearchCriteriaListResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderSearchCriteriaListResponseData'],
    ];

    protected static $nullables = ['data' => false];
}

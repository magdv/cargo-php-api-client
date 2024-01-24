<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с критерием поиска
 * source: order/responses/order-search-criteria-response.json
 *
 * @property OrderSearchCriteriaResponseData $data
 */
final class OrderSearchCriteriaResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderSearchCriteriaResponseData']];
    protected static $nullables = ['data' => false];
}

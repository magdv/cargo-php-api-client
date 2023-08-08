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
 * Ответ с критерием поиска
 * source: order/responses/order-search-criteria-response.json
 *
 * @property MessageV2[] $message
 * @property OrderSearchCriteriaResponseData $data
 */
final class OrderSearchCriteriaResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderSearchCriteriaResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

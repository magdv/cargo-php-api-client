<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список ставок заказа.
 * source: order/responses/bid-list-response.json
 *
 * @property BidListResponseData $data
 */
final class BidListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\BidListResponseData']];
    protected static $nullables = ['data' => false];
}

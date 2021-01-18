<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список ставок заказа.
 * source: order/responses/bid-list-response.json
 *
 * @property MessageV2[] $message
 * @property BidListResponseData $data
 */
final class BidListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\BidListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

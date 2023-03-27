<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/bid-last-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Информация о последней ставке
 * source: order/responses/bid-last-response.json
 *
 * @property MessageV2[] $message
 * @property BidLastResponseData $data
 */
final class BidLastResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\BidLastResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

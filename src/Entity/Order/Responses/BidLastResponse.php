<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Информация о последней ставке
 * source: order/responses/bid-last-response.json
 *
 * @property BidLastResponseData $data
 */
final class BidLastResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\BidLastResponseData']];
    protected static $nullables = ['data' => false];
}

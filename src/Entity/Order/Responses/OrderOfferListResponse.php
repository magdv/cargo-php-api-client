<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список предложений
 * source: order/responses/order-offer-list-response.json
 *
 * @property OrderOfferListResponseData $data
 */
final class OrderOfferListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderOfferListResponseData']];
    protected static $nullables = ['data' => false];
}

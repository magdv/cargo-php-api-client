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
 * Список предложений
 * source: order/responses/order-offer-list-response.json
 *
 * @property MessageV2[] $message
 * @property OrderOfferListResponseData $data
 */
final class OrderOfferListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderOfferListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

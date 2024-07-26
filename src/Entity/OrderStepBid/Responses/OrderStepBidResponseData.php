<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\OrderStepBid\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Значение шага ставки
 * source: order-step-bid/responses/order-step-bid-response.json#/properties/data
 *
 * @property string $stepBid
 */
final class OrderStepBidResponseData extends AbstractEntity
{
    protected static $types = ['stepBid' => ['string']];
    protected static $nullables = ['stepBid' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Значение шага ставки
 * source: order/Common/responses/order-draft-step-bid-response.json#/properties/data
 *
 * @property string $stepBid
 */
final class OrderDraftStepBidResponseData extends AbstractEntity
{
    protected static $types = ['stepBid' => ['string']];
    protected static $nullables = ['stepBid' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-draft-expeditor-step-bid-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Значение шага ставки
 * source: order/responses/order-draft-expeditor-step-bid-response.json#/properties/data
 *
 * @property string $stepBid
 */
final class OrderDraftExpeditorStepBidResponseData extends AbstractEntity
{
    protected static $types = ['stepBid' => ['string']];
    protected static $nullables = ['stepBid' => false];
}

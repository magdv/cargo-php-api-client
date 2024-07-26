<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderCarrierAsk\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос создания или замены ставки перевозчика по заявке
 * source: order/OrderCarrierAsk/requests/order-carrier-ask-request.json
 *
 * @property string $price
 * @property string $expirationDateTime
 */
final class OrderCarrierAskRequest extends AbstractEntity
{
    protected static $types = ['price' => ['string'], 'expirationDateTime' => ['string']];
    protected static $nullables = ['price' => false, 'expirationDateTime' => false];
}

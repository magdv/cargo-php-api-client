<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/requests/order-carrier-ask-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос создания или замены ставки перевозчика по заявке
 * source: order/requests/order-carrier-ask-request.json
 *
 * @property string $price
 * @property string $expirationDateTime
 */
final class OrderCarrierAskRequest extends AbstractEntity
{
    protected static $types = ['price' => ['string'], 'expirationDateTime' => ['string']];
    protected static $nullables = ['price' => false, 'expirationDateTime' => false];
}

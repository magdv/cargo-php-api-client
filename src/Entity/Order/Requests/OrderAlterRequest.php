<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для редактирования объекта заказа
 * source: order/requests/order-alter-request.json
 *
 * @property string $externalId
 */
final class OrderAlterRequest extends AbstractEntity
{
    protected static $types = ['externalId' => ['string']];
    protected static $nullables = ['externalId' => false];
}

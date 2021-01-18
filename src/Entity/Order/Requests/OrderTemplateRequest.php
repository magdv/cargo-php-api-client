<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Создание шаблона из заказа
 * source: order/requests/order-template-request.json
 *
 * @property string $name
 */
final class OrderTemplateRequest extends AbstractEntity
{
    protected static $types = ['name' => ['string']];
    protected static $nullables = ['name' => false];
}

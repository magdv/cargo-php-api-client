<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Создание шаблона из заказа
 * source: order/Common/requests/order-template-request.json
 *
 * @property string $name
 */
final class OrderTemplateRequest extends AbstractEntity
{
    protected static $types = ['name' => ['string']];
    protected static $nullables = ['name' => false];
}

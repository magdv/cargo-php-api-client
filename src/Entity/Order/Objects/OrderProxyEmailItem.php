<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Юнит объекта списка email для точки
 * source: order/objects/order-proxy-email-item.json
 *
 * @property int $pointIdFrom
 * @property int $pointIdTo
 * @property string[] $email
 */
final class OrderProxyEmailItem extends AbstractEntity
{
    protected static $types = ['pointIdFrom' => ['int'], 'pointIdTo' => ['int'], 'email' => ['array', 'string']];
    protected static $nullables = ['pointIdFrom' => false, 'pointIdTo' => false, 'email' => false];
}

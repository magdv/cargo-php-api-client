<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Список email для точки
 * source: order/requests/order-proxy-email-request.json
 *
 * @property int $pointIdFrom
 * @property int $pointIdTo
 * @property string[] $email
 */
final class OrderProxyEmailRequest extends AbstractEntity
{
    protected static $types = ['pointIdFrom' => ['int'], 'pointIdTo' => ['int'], 'email' => ['array', 'string']];
    protected static $nullables = ['pointIdFrom' => false, 'pointIdTo' => false, 'email' => false];
}

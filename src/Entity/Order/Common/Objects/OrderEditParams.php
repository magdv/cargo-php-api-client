<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Дополнительные параметры/флаги заказа
 * source: order/Common/objects/order-edit-params.json
 *
 * @property bool $allowProxyPublicLink
 */
final class OrderEditParams extends AbstractEntity
{
    protected static $types = ['allowProxyPublicLink' => ['bool']];
    protected static $nullables = ['allowProxyPublicLink' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/requests/order-publish-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос, если нужно дополнительные проверки при публикации заказа
 * source: order/requests/order-publish-request.json
 *
 * @property bool $isPriceCheck
 */
final class OrderPublishRequest extends AbstractEntity
{
    protected static $types = ['isPriceCheck' => ['bool']];
    protected static $nullables = ['isPriceCheck' => false];
}

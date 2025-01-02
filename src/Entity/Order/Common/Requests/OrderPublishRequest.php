<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос, если нужно дополнительные проверки при публикации заказа
 * source: order/Common/requests/order-publish-request.json
 *
 * @property bool $isPriceCheck
 */
final class OrderPublishRequest extends AbstractEntity
{
    protected static $types = ['isPriceCheck' => ['bool']];
    protected static $nullables = ['isPriceCheck' => false];
}

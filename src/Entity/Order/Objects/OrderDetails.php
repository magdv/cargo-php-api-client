<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект комментария
 * source: order/objects/order-details.json
 *
 * @property string $type
 * @property string $title
 * @property string $content
 */
final class OrderDetails extends AbstractEntity
{
    protected static $types = ['type' => ['string'], 'title' => ['string'], 'content' => ['string']];
    protected static $nullables = ['type' => false, 'title' => false, 'content' => false];
}

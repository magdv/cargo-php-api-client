<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект предыдущего документа
 * source: order/objects/order-prev-doc.json
 *
 * @property int $id
 * @property string $url
 * @property string $uploadDate
 */
final class OrderPrevDoc extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'url' => ['string'], 'uploadDate' => ['string']];
    protected static $nullables = ['id' => false, 'url' => false, 'uploadDate' => false];
}

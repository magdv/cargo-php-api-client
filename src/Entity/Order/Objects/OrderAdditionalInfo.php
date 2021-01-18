<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект добавочных данных для модального окна
 * source: order/objects/order-additional-info.json
 *
 * @property string $wealthBy
 * @property WealthItem[] $items
 */
final class OrderAdditionalInfo extends AbstractEntity
{
    protected static $types = [
        'wealthBy' => ['string'],
        'items' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\WealthItem'],
    ];

    protected static $nullables = ['wealthBy' => false, 'items' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\PriceValue;

/**
 * Объект цены заявки Экспедитора
 * source: order/Common/objects/order-draft-expeditor-price-value-v2.json
 *
 * @property PriceValue $price
 * @property string $expeditorPriceStrategyType
 */
final class OrderDraftExpeditorPriceValueV2 extends AbstractEntity
{
    protected static $types = [
        'price' => ['Cargomart\ApiClient\Entity\Base\PriceValue'],
        'expeditorPriceStrategyType' => ['string'],
    ];

    protected static $nullables = ['price' => false, 'expeditorPriceStrategyType' => false];
}

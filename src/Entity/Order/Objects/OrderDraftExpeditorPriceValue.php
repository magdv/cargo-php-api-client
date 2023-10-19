<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект цены заявки Экспедитора
 * source: order/objects/order-draft-expeditor-price-value.json
 *
 * @property string $value
 * @property \stdClass $vatRate
 * @property string $vat
 * @property string $currencyCode
 * @property string $expeditorPriceStrategyType
 */
final class OrderDraftExpeditorPriceValue extends AbstractEntity
{
    protected static $types = [
        'value' => ['string'],
        'vatRate' => ['\stdClass'],
        'vat' => ['string'],
        'currencyCode' => ['string'],
        'expeditorPriceStrategyType' => ['string'],
    ];

    protected static $nullables = [
        'value' => false,
        'vatRate' => true,
        'vat' => false,
        'currencyCode' => false,
        'expeditorPriceStrategyType' => false,
    ];
}

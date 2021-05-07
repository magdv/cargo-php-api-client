<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Условия по направлению
 * source: order/objects/order-draft-expeditor-conditions.json
 *
 * @property string $price
 * @property float $vatRate
 * @property string $vatlessPrice
 * @property string $paymentDetails
 */
final class OrderDraftExpeditorConditions extends AbstractEntity
{
    protected static $types = [
        'price' => ['string'],
        'vatRate' => ['float'],
        'vatlessPrice' => ['string'],
        'paymentDetails' => ['string'],
    ];

    protected static $nullables = [
        'price' => false,
        'vatRate' => false,
        'vatlessPrice' => false,
        'paymentDetails' => false,
    ];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект цены
 * source: base/price-value.json
 *
 * @property string $total
 * @property string $value
 * @property \stdClass $vatRate
 * @property string $vat
 * @property string $currencyCode
 */
final class PriceValue extends AbstractEntity
{
    protected static $types = [
        'total' => ['string'],
        'value' => ['string'],
        'vatRate' => ['\stdClass'],
        'vat' => ['string'],
        'currencyCode' => ['string'],
    ];

    protected static $nullables = [
        'total' => false,
        'value' => false,
        'vatRate' => true,
        'vat' => false,
        'currencyCode' => false,
    ];
}

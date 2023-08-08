<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект с ценами
 * source: expeditor/objects/price.json
 *
 * @property string $currencyCode
 * @property string $total
 * @property string $vat
 * @property \stdClass $vatRate
 * @property string $value
 */
final class Price extends AbstractEntity
{
    protected static $types = [
        'currencyCode' => ['string'],
        'total' => ['string'],
        'vat' => ['string'],
        'vatRate' => ['\stdClass'],
        'value' => ['string'],
    ];

    protected static $nullables = [
        'currencyCode' => false,
        'total' => false,
        'vat' => false,
        'vatRate' => true,
        'value' => false,
    ];
}

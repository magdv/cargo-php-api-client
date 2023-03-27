<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: base/pay-value.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект оплаты
 * source: base/pay-value.json
 *
 * @property string $value
 * @property \stdClass $vatRate
 * @property string $vat
 * @property string $currency
 * @property string $type
 */
final class PayValue extends AbstractEntity
{
    protected static $types = [
        'value' => ['string'],
        'vatRate' => ['\stdClass'],
        'vat' => ['string'],
        'currency' => ['string'],
        'type' => ['string'],
    ];

    protected static $nullables = [
        'value' => false,
        'vatRate' => true,
        'vat' => false,
        'currency' => false,
        'type' => false,
    ];
}

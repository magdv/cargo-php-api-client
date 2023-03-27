<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: payment/models/payment.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Payment\Models;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Payment\Objects\PaymentAccess;
use Cargomart\ApiClient\Entity\Payment\Objects\PaymentTransaction;

/**
 * Оплата по счету
 * source: payment/models/payment.json
 *
 * @property string $number
 * @property string $date
 * @property string $type
 * @property string $status
 * @property string $value
 * @property PaymentTransaction[] $transactions
 * @property int $version
 * @property PaymentAccess $access
 */
final class Payment extends AbstractEntity
{
    protected static $types = [
        'number' => ['string'],
        'date' => ['string'],
        'type' => ['string'],
        'status' => ['string'],
        'value' => ['string'],
        'transactions' => ['array', 'Cargomart\ApiClient\Entity\Payment\Objects\PaymentTransaction'],
        'version' => ['int'],
        'access' => ['Cargomart\ApiClient\Entity\Payment\Objects\PaymentAccess'],
    ];

    protected static $nullables = [
        'number' => false,
        'date' => false,
        'type' => false,
        'status' => false,
        'value' => false,
        'transactions' => false,
        'version' => false,
        'access' => false,
    ];
}

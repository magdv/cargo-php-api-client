<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-banking.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Банковские реквизиты в заказе
 * source: order/objects/order-banking.json
 *
 * @property string $bankName
 * @property string $operatingAccount
 * @property string $correspondingAccount
 * @property string $bic
 */
final class OrderBanking extends AbstractEntity
{
    protected static $types = [
        'bankName' => ['string'],
        'operatingAccount' => ['string'],
        'correspondingAccount' => ['string'],
        'bic' => ['string'],
    ];

    protected static $nullables = [
        'bankName' => false,
        'operatingAccount' => false,
        'correspondingAccount' => false,
        'bic' => false,
    ];
}

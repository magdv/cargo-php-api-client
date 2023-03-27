<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor/objects/banking-details.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Банковский реквизиты
 * source: expeditor/objects/banking-details.json
 *
 * @property string $bankName
 * @property string $operatingAccount
 * @property string $correspondingAccount
 * @property string $bic
 */
final class BankingDetails extends AbstractEntity
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

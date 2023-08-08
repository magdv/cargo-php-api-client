<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorAnnexToContract\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Банковские реквизиты (обновление)
 * source: expeditor-annex-to-contract/requests/banking-details-update-request.json
 *
 * @property string $bankName
 * @property string $operatingAccount
 * @property string $correspondingAccount
 * @property string $bic
 * @property bool $forceUpdate
 */
final class BankingDetailsUpdateRequest extends AbstractEntity
{
    protected static $types = [
        'bankName' => ['string'],
        'operatingAccount' => ['string'],
        'correspondingAccount' => ['string'],
        'bic' => ['string'],
        'forceUpdate' => ['bool'],
    ];

    protected static $nullables = [
        'bankName' => false,
        'operatingAccount' => false,
        'correspondingAccount' => false,
        'bic' => false,
        'forceUpdate' => false,
    ];
}

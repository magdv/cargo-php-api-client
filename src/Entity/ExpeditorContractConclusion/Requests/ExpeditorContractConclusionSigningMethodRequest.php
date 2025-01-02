<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Установка способа подписания договора
 * source: expeditor-contract-conclusion/requests/expeditor-contract-conclusion-signing-method-request.json
 *
 * @property string $signingMethod
 * @property string $signingEdmName
 * @property string $refuseMessage
 */
final class ExpeditorContractConclusionSigningMethodRequest extends AbstractEntity
{
    protected static $types = ['signingMethod' => ['string'], 'signingEdmName' => ['string'], 'refuseMessage' => ['string']];
    protected static $nullables = ['signingMethod' => false, 'signingEdmName' => false, 'refuseMessage' => false];
}

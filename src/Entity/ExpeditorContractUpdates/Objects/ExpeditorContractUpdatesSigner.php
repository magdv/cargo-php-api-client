<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные подписанта
 * source: expeditor-contract-updates/objects/expeditor-contract-updates-signer.json
 *
 * @property string $firstName
 * @property string $lastName
 * @property string $secondName
 * @property string $inn
 * @property string $foundationDocument
 */
final class ExpeditorContractUpdatesSigner extends AbstractEntity
{
    protected static $types = [
        'firstName' => ['string'],
        'lastName' => ['string'],
        'secondName' => ['string'],
        'inn' => ['string'],
        'foundationDocument' => ['string'],
    ];

    protected static $nullables = [
        'firstName' => false,
        'lastName' => false,
        'secondName' => false,
        'inn' => false,
        'foundationDocument' => false,
    ];
}

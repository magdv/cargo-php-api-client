<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-signer.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Текущий подписант договора
 * source: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-signer.json
 *
 * @property string $signerId
 * @property string $firstName
 * @property string $lastName
 * @property string $secondName
 * @property string $position
 * @property string $phone
 * @property string $email
 * @property string $documentType
 * @property string $documentNumber
 * @property string $documentDate
 */
final class ExpeditorContractConclusionSigner extends AbstractEntity
{
    protected static $types = [
        'signerId' => ['string'],
        'firstName' => ['string'],
        'lastName' => ['string'],
        'secondName' => ['string'],
        'position' => ['string'],
        'phone' => ['string'],
        'email' => ['string'],
        'documentType' => ['string'],
        'documentNumber' => ['string'],
        'documentDate' => ['string'],
    ];

    protected static $nullables = [
        'signerId' => false,
        'firstName' => false,
        'lastName' => false,
        'secondName' => false,
        'position' => false,
        'phone' => false,
        'email' => false,
        'documentType' => false,
        'documentNumber' => false,
        'documentDate' => false,
    ];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor-contract-conclusion/requests/expeditor-contract-conclusion-signer-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Установка текущего подписанта договора
 * source: expeditor-contract-conclusion/requests/expeditor-contract-conclusion-signer-request.json
 *
 * @property \stdClass $signerId
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
final class ExpeditorContractConclusionSignerRequest extends AbstractEntity
{
    protected static $types = [
        'signerId' => ['\stdClass'],
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
        'signerId' => true,
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

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-issue-certificate.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Пользователь для получения роли ПЭП-админ
 * source: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-issue-certificate.json
 *
 * @property string $firstName
 * @property int $receiverId
 * @property string $lastName
 * @property string $secondName
 * @property string $phone
 * @property bool $isPhoneConfirmed
 */
final class ExpeditorContractConclusionIssueCertificate extends AbstractEntity
{
    protected static $types = [
        'firstName' => ['string'],
        'receiverId' => ['int'],
        'lastName' => ['string'],
        'secondName' => ['string'],
        'phone' => ['string'],
        'isPhoneConfirmed' => ['bool'],
    ];

    protected static $nullables = [
        'firstName' => false,
        'receiverId' => false,
        'lastName' => false,
        'secondName' => false,
        'phone' => false,
        'isPhoneConfirmed' => false,
    ];
}

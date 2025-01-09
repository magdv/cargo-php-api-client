<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
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
 * @property string $availableResendSmsCodeDate
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
        'availableResendSmsCodeDate' => ['string'],
        'isPhoneConfirmed' => ['bool'],
    ];

    protected static $nullables = [
        'firstName' => false,
        'receiverId' => false,
        'lastName' => false,
        'secondName' => false,
        'phone' => false,
        'availableResendSmsCodeDate' => false,
        'isPhoneConfirmed' => false,
    ];
}

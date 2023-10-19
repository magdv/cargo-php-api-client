<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Установка данных пользователя для получения роли ПЭП-админ
 * source: expeditor-contract-conclusion/requests/expeditor-contract-conclusion-issue-certificate-request.json
 *
 * @property string $firstName
 * @property string $lastName
 * @property string $secondName
 * @property string $phone
 */
final class ExpeditorContractConclusionIssueCertificateRequest extends AbstractEntity
{
    protected static $types = [
        'firstName' => ['string'],
        'lastName' => ['string'],
        'secondName' => ['string'],
        'phone' => ['string'],
    ];

    protected static $nullables = ['firstName' => false, 'lastName' => false, 'secondName' => false, 'phone' => false];
}

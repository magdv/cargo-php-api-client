<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для редактирования компании
 * source: company/requests/company-patch.json
 *
 * @property bool $isPartnershipAllowed
 * @property string $actualAddress
 * @property string $phone
 * @property string $email
 * @property string $bankName
 * @property string $operatingAccount
 * @property string $correspondingAccount
 * @property string $bic
 * @property string $url
 * @property int $activityTypeId
 * @property string $description
 */
final class CompanyPatch extends AbstractEntity
{
    protected static $types = [
        'isPartnershipAllowed' => ['bool'],
        'actualAddress' => ['string'],
        'phone' => ['string'],
        'email' => ['string'],
        'bankName' => ['string'],
        'operatingAccount' => ['string'],
        'correspondingAccount' => ['string'],
        'bic' => ['string'],
        'url' => ['string'],
        'activityTypeId' => ['int'],
        'description' => ['string'],
    ];

    protected static $nullables = [
        'isPartnershipAllowed' => false,
        'actualAddress' => false,
        'phone' => false,
        'email' => false,
        'bankName' => false,
        'operatingAccount' => false,
        'correspondingAccount' => false,
        'bic' => false,
        'url' => false,
        'activityTypeId' => false,
        'description' => false,
    ];
}

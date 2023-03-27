<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company-confirmation/requests/income-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос доступа в компанию
 * source: company-confirmation/requests/income-request.json
 *
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $position
 * @property string $contactPhone
 * @property string $contactPhoneExt
 * @property string $comment
 */
final class IncomeRequest extends AbstractEntity
{
    protected static $types = [
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'position' => ['string'],
        'contactPhone' => ['string'],
        'contactPhoneExt' => ['string'],
        'comment' => ['string'],
    ];

    protected static $nullables = [
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'position' => false,
        'contactPhone' => false,
        'contactPhoneExt' => false,
        'comment' => false,
    ];
}

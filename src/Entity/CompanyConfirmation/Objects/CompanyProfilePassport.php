<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company-confirmation/objects/company-profile.json#/properties/passport
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Паспортные данные
 * source: company-confirmation/objects/company-profile.json#/properties/passport
 *
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $series
 * @property string $number
 * @property string $issueDate
 * @property string $issueBy
 * @property string $issueCode
 */
final class CompanyProfilePassport extends AbstractEntity
{
    protected static $types = [
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'series' => ['string'],
        'number' => ['string'],
        'issueDate' => ['string'],
        'issueBy' => ['string'],
        'issueCode' => ['string'],
    ];

    protected static $nullables = [
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'series' => false,
        'number' => false,
        'issueDate' => false,
        'issueBy' => false,
        'issueCode' => false,
    ];
}

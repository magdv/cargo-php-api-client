<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company-confirmation/objects/company-profile.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\CompanyProfileBankingDetails;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\CompanyProfileBookkeeperDetails;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\CompanyProfileCarryingOption;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\CompanyProfileCompany;
use Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\CompanyProfilePassport;

/**
 * Анкета для упрощенной валидации
 * source: company-confirmation/objects/company-profile.json
 *
 * @property CompanyProfilePassport $passport
 * @property CompanyProfileCompany $company
 * @property CompanyProfileBankingDetails $bankingDetails
 * @property CompanyProfileBookkeeperDetails $bookkeeperDetails
 * @property CompanyProfileCarryingOption $carryingOption
 */
final class CompanyProfileRequest extends AbstractEntity
{
    protected static $types = [
        'passport' => ['Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\CompanyProfilePassport'],
        'company' => ['Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\CompanyProfileCompany'],
        'bankingDetails' => ['Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\CompanyProfileBankingDetails'],
        'bookkeeperDetails' => ['Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\CompanyProfileBookkeeperDetails'],
        'carryingOption' => ['Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\CompanyProfileCarryingOption'],
    ];

    protected static $nullables = [
        'passport' => false,
        'company' => false,
        'bankingDetails' => false,
        'bookkeeperDetails' => false,
        'carryingOption' => false,
    ];
}

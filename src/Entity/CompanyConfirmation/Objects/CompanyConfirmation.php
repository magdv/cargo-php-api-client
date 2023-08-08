<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Candidate\Objects\Candidate;

/**
 * Объект состояния валидации
 * source: company-confirmation/objects/company-confirmation.json
 *
 * @property string $status
 * @property Message $message
 * @property Owner $owner
 * @property Contact[] $contacts
 * @property Candidate $candidate
 * @property Company $company
 * @property string[] $requiredDocs
 * @property int[] $file
 * @property CompanyProfile $companyProfile
 * @property bool $allowEasyValidation
 * @property int $consignorContractIteration
 * @property CompanyConfirmationAccess $access
 */
final class CompanyConfirmation extends AbstractEntity
{
    protected static $types = [
        'status' => ['string'],
        'message' => ['Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\Message'],
        'owner' => ['Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\Owner'],
        'contacts' => ['array', 'Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\Contact'],
        'candidate' => ['Cargomart\ApiClient\Entity\Candidate\Objects\Candidate'],
        'company' => ['Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\Company'],
        'requiredDocs' => ['array', 'string'],
        'file' => ['array', 'int'],
        'companyProfile' => ['Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\CompanyProfile'],
        'allowEasyValidation' => ['bool'],
        'consignorContractIteration' => ['int'],
        'access' => ['Cargomart\ApiClient\Entity\CompanyConfirmation\Objects\CompanyConfirmationAccess'],
    ];

    protected static $nullables = [
        'status' => false,
        'message' => false,
        'owner' => false,
        'contacts' => false,
        'candidate' => false,
        'company' => false,
        'requiredDocs' => false,
        'file' => false,
        'companyProfile' => false,
        'allowEasyValidation' => false,
        'consignorContractIteration' => false,
        'access' => false,
    ];
}

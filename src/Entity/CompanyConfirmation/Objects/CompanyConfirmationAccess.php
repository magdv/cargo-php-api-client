<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company-confirmation/objects/company-confirmation-access.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\CompanyConfirmation\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект состояния валидации
 * source: company-confirmation/objects/company-confirmation-access.json
 *
 * @property bool $updateRole
 * @property bool $deleteRole
 * @property bool $updateCompany
 * @property bool $createCompany
 * @property bool $deleteCompany
 * @property bool $createCompanyConfirm
 * @property bool $deleteCompanyConfirm
 * @property bool $createDocument
 * @property bool $createDocumentSend
 * @property bool $createIncomeRequest
 * @property bool $updateCompanyProfile
 * @property bool $createCompanyProfileSend
 */
final class CompanyConfirmationAccess extends AbstractEntity
{
    protected static $types = [
        'updateRole' => ['bool'],
        'deleteRole' => ['bool'],
        'updateCompany' => ['bool'],
        'createCompany' => ['bool'],
        'deleteCompany' => ['bool'],
        'createCompanyConfirm' => ['bool'],
        'deleteCompanyConfirm' => ['bool'],
        'createDocument' => ['bool'],
        'createDocumentSend' => ['bool'],
        'createIncomeRequest' => ['bool'],
        'updateCompanyProfile' => ['bool'],
        'createCompanyProfileSend' => ['bool'],
    ];

    protected static $nullables = [
        'updateRole' => false,
        'deleteRole' => false,
        'updateCompany' => false,
        'createCompany' => false,
        'deleteCompany' => false,
        'createCompanyConfirm' => false,
        'deleteCompanyConfirm' => false,
        'createDocument' => false,
        'createDocumentSend' => false,
        'createIncomeRequest' => false,
        'updateCompanyProfile' => false,
        'createCompanyProfileSend' => false,
    ];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект списка экспедиторских договоров
 * source: company/objects/company-expeditor-contract.json
 *
 * @property string $id
 * @property string $date
 * @property string $number
 * @property string $title
 * @property int $companyBranchId
 * @property string $contractType
 */
final class CompanyExpeditorContract extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'date' => ['string'],
        'number' => ['string'],
        'title' => ['string'],
        'companyBranchId' => ['int'],
        'contractType' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'date' => false,
        'number' => false,
        'title' => false,
        'companyBranchId' => false,
        'contractType' => false,
    ];
}

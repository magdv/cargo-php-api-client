<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\ContractType\Objects\ContractType;
use Cargomart\ApiClient\Entity\File\Objects\File;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Tender\Models\TenderDraft;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: tender/responses/tender-draft-list-response.json#/properties/data
 *
 * @property TenderDraft[] $tenderDraft
 * @property CompanyShort[] $company
 * @property Locality[] $locality
 * @property File[] $file
 * @property UserContactShort[] $contact
 * @property ContractType $contractType
 * @property Pagination $pagination
 */
final class TenderDraftListResponseData extends AbstractEntity
{
    protected static $types = [
        'tenderDraft' => ['array', 'Cargomart\ApiClient\Entity\Tender\Models\TenderDraft'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'file' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\File'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'contractType' => ['Cargomart\ApiClient\Entity\ContractType\Objects\ContractType'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = [
        'tenderDraft' => false,
        'company' => false,
        'locality' => false,
        'file' => false,
        'contact' => false,
        'contractType' => false,
        'pagination' => false,
    ];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/responses/tender-draft-request-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\ContractType\Objects\ContractType;
use Cargomart\ApiClient\Entity\File\Objects\FileV1;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Tender\Models\TenderDraft;
use Cargomart\ApiClient\Entity\Tender\Models\TenderRequest;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: tender/responses/tender-draft-request-response.json#/properties/data
 *
 * @property TenderDraft $tenderDraft
 * @property TenderRequest $tenderRequest
 * @property CompanyShort[] $company
 * @property Locality[] $locality
 * @property FileV1[] $file
 * @property UserContactShort[] $contact
 * @property ContractType $contractType
 */
final class TenderDraftRequestResponseData extends AbstractEntity
{
    protected static $types = [
        'tenderDraft' => ['Cargomart\ApiClient\Entity\Tender\Models\TenderDraft'],
        'tenderRequest' => ['Cargomart\ApiClient\Entity\Tender\Models\TenderRequest'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'file' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\FileV1'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'contractType' => ['Cargomart\ApiClient\Entity\ContractType\Objects\ContractType'],
    ];

    protected static $nullables = [
        'tenderDraft' => false,
        'tenderRequest' => false,
        'company' => false,
        'locality' => false,
        'file' => false,
        'contact' => false,
        'contractType' => false,
    ];
}

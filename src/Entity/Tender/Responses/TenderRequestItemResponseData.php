<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\ContractType\Objects\ContractType;
use Cargomart\ApiClient\Entity\File\Objects\Document;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Tender\Models\TenderRequest;
use Cargomart\ApiClient\Entity\Tender\Models\TenderRequestLot;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: tender/responses/tender-request-item-response.json#/properties/data
 *
 * @property TenderRequest $tenderRequest
 * @property TenderRequestLot[] $lotRequest
 * @property CompanyShort[] $company
 * @property Document[] $document
 * @property UserContactShort[] $contact
 * @property ContractType $contractType
 * @property Locality[] $locality
 */
final class TenderRequestItemResponseData extends AbstractEntity
{
    protected static $types = [
        'tenderRequest' => ['Cargomart\ApiClient\Entity\Tender\Models\TenderRequest'],
        'lotRequest' => ['array', 'Cargomart\ApiClient\Entity\Tender\Models\TenderRequestLot'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'document' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\Document'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'contractType' => ['Cargomart\ApiClient\Entity\ContractType\Objects\ContractType'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
    ];

    protected static $nullables = [
        'tenderRequest' => false,
        'lotRequest' => false,
        'company' => false,
        'document' => false,
        'contact' => false,
        'contractType' => false,
        'locality' => false,
    ];
}

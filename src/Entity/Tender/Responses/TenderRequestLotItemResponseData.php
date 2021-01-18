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
use Cargomart\ApiClient\Entity\Tender\Models\TenderRequestLotProposal;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: tender/responses/tender-request-lot-item-response.json#/properties/data
 *
 * @property TenderRequestLot $lotRequest
 * @property TenderRequest $tenderRequest
 * @property TenderRequestLotProposal[] $lotProposal
 * @property CompanyShort[] $company
 * @property Locality[] $locality
 * @property Document[] $document
 * @property UserContactShort[] $contact
 * @property ContractType $contractType
 */
final class TenderRequestLotItemResponseData extends AbstractEntity
{
    protected static $types = [
        'lotRequest' => ['Cargomart\ApiClient\Entity\Tender\Models\TenderRequestLot'],
        'tenderRequest' => ['Cargomart\ApiClient\Entity\Tender\Models\TenderRequest'],
        'lotProposal' => ['array', 'Cargomart\ApiClient\Entity\Tender\Models\TenderRequestLotProposal'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'document' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\Document'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'contractType' => ['Cargomart\ApiClient\Entity\ContractType\Objects\ContractType'],
    ];

    protected static $nullables = [
        'lotRequest' => false,
        'tenderRequest' => false,
        'lotProposal' => false,
        'company' => false,
        'locality' => false,
        'document' => false,
        'contact' => false,
        'contractType' => false,
    ];
}

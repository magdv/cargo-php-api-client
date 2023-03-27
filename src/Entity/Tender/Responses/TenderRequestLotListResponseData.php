<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/responses/tender-request-lot-list-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\ContractType\Objects\ContractType;
use Cargomart\ApiClient\Entity\File\Objects\Document;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Tender\Models\TenderRequest;
use Cargomart\ApiClient\Entity\Tender\Models\TenderRequestLot;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: tender/responses/tender-request-lot-list-response.json#/properties/data
 *
 * @property TenderRequestLot[] $lotRequest
 * @property TenderRequest[] $tenderRequest
 * @property CompanyShort[] $company
 * @property Locality[] $locality
 * @property Document[] $document
 * @property UserContactShort[] $contact
 * @property ContractType $contractType
 * @property Pagination $pagination
 */
final class TenderRequestLotListResponseData extends AbstractEntity
{
    protected static $types = [
        'lotRequest' => ['array', 'Cargomart\ApiClient\Entity\Tender\Models\TenderRequestLot'],
        'tenderRequest' => ['array', 'Cargomart\ApiClient\Entity\Tender\Models\TenderRequest'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'document' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\Document'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'contractType' => ['Cargomart\ApiClient\Entity\ContractType\Objects\ContractType'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = [
        'lotRequest' => false,
        'tenderRequest' => false,
        'company' => false,
        'locality' => false,
        'document' => false,
        'contact' => false,
        'contractType' => false,
        'pagination' => false,
    ];
}

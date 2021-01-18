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
use Cargomart\ApiClient\Entity\File\Objects\Document;
use Cargomart\ApiClient\Entity\Tender\Models\TenderRequest;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: tender/responses/tender-request-list-response.json#/properties/data
 *
 * @property TenderRequest[] $tenderRequest
 * @property CompanyShort[] $company
 * @property Document[] $document
 * @property UserContactShort[] $contact
 * @property ContractType $contractType
 * @property Pagination $pagination
 */
final class TenderRequestListResponseData extends AbstractEntity
{
    protected static $types = [
        'tenderRequest' => ['array', 'Cargomart\ApiClient\Entity\Tender\Models\TenderRequest'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'document' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\Document'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'contractType' => ['Cargomart\ApiClient\Entity\ContractType\Objects\ContractType'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = [
        'tenderRequest' => false,
        'company' => false,
        'document' => false,
        'contact' => false,
        'contractType' => false,
        'pagination' => false,
    ];
}

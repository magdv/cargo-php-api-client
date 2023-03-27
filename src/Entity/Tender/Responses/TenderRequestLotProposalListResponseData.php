<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: tender/responses/tender-request-lot-proposal-list-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tender\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Tender\Models\TenderRequestLotProposal;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * source: tender/responses/tender-request-lot-proposal-list-response.json#/properties/data
 *
 * @property TenderRequestLotProposal[] $lotProposal
 * @property CompanyShort[] $company
 * @property UserContactShort[] $contact
 */
final class TenderRequestLotProposalListResponseData extends AbstractEntity
{
    protected static $types = [
        'lotProposal' => ['array', 'Cargomart\ApiClient\Entity\Tender\Models\TenderRequestLotProposal'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
    ];

    protected static $nullables = ['lotProposal' => false, 'company' => false, 'contact' => false];
}

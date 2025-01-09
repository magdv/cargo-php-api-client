<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorAnnexToContract\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\ExpeditorAnnexToContract\Objects\ContractBankingDetails;

/**
 * source: expeditor-annex-to-contract/responses/banking-details-response.json#/properties/data
 *
 * @property ContractBankingDetails $bankingDetails
 */
final class BankingDetailsResponseData extends AbstractEntity
{
    protected static $types = [
        'bankingDetails' => ['Cargomart\ApiClient\Entity\ExpeditorAnnexToContract\Objects\ContractBankingDetails'],
    ];

    protected static $nullables = ['bankingDetails' => false];
}

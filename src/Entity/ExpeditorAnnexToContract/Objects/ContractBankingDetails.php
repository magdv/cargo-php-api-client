<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorAnnexToContract\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\DigitalSignature\Objects\Certificate;

/**
 * Банковский реквизиты
 * source: expeditor-annex-to-contract/objects/contract-banking-details.json
 *
 * @property int $approveStatus
 * @property string $bankName
 * @property string $operatingAccount
 * @property string $correspondingAccount
 * @property string $bic
 * @property bool $isActive
 * @property string $signDate
 * @property ContractDetails $contract
 * @property CompanyDetails $company
 * @property Certificate $certificate
 */
final class ContractBankingDetails extends AbstractEntity
{
    protected static $types = [
        'approveStatus' => ['int'],
        'bankName' => ['string'],
        'operatingAccount' => ['string'],
        'correspondingAccount' => ['string'],
        'bic' => ['string'],
        'isActive' => ['bool'],
        'signDate' => ['string'],
        'contract' => ['Cargomart\ApiClient\Entity\ExpeditorAnnexToContract\Objects\ContractDetails'],
        'company' => ['Cargomart\ApiClient\Entity\ExpeditorAnnexToContract\Objects\CompanyDetails'],
        'certificate' => ['Cargomart\ApiClient\Entity\DigitalSignature\Objects\Certificate'],
    ];

    protected static $nullables = [
        'approveStatus' => false,
        'bankName' => false,
        'operatingAccount' => false,
        'correspondingAccount' => false,
        'bic' => false,
        'isActive' => false,
        'signDate' => false,
        'contract' => false,
        'company' => false,
        'certificate' => false,
    ];
}

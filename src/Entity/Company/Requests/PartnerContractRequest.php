<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\PartnerContractForm;

/**
 * Форма указания договоров о партнерстве
 * source: company/requests/partner-contract-request.json
 *
 * @property PartnerContractForm[] $contract
 */
final class PartnerContractRequest extends AbstractEntity
{
    protected static $types = ['contract' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\PartnerContractForm']];
    protected static $nullables = ['contract' => false];
}

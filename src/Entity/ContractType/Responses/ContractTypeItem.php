<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ContractType\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Тип договора
 * source: contract-type/responses/contract-type-item.json
 *
 * @property ContractTypeItemData $data
 */
final class ContractTypeItem extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\ContractType\Responses\ContractTypeItemData']];
    protected static $nullables = ['data' => false];
}

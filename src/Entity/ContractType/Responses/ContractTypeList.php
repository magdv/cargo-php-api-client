<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ContractType\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список типов договоров
 * source: contract-type/responses/contract-type-list.json
 *
 * @property ContractTypeListData $data
 */
final class ContractTypeList extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\ContractType\Responses\ContractTypeListData']];
    protected static $nullables = ['data' => false];
}

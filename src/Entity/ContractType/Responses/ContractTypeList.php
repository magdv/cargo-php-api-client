<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: contract-type/responses/contract-type-list.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ContractType\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список типов договоров
 * source: contract-type/responses/contract-type-list.json
 *
 * @property MessageV2[] $message
 * @property ContractTypeListData $data
 */
final class ContractTypeList extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\ContractType\Responses\ContractTypeListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ContractType\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Тип договора
 * source: contract-type/responses/contract-type-item.json
 *
 * @property MessageV2[] $message
 * @property ContractTypeItemData $data
 */
final class ContractTypeItem extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\ContractType\Responses\ContractTypeItemData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

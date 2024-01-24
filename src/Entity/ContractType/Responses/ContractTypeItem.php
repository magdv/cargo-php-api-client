<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ContractType\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Тип договора
 * source: contract-type/responses/contract-type-item.json
 *
 * @property ContractTypeItemData $data
 * @property MessageV2[] $message
 */
final class ContractTypeItem extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\ContractType\Responses\ContractTypeItemData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}

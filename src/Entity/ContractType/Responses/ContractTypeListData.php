<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: contract-type/responses/contract-type-list.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ContractType\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\ContractType\Objects\ContractType;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Common response data
 * source: contract-type/responses/contract-type-list.json#/properties/data
 *
 * @property ContractType[] $contractType
 * @property UserContactShort[] $contact
 */
final class ContractTypeListData extends AbstractEntity
{
    protected static $types = [
        'contractType' => ['array', 'Cargomart\ApiClient\Entity\ContractType\Objects\ContractType'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
    ];

    protected static $nullables = ['contractType' => false, 'contact' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: contract-type/objects/contract-type.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ContractType\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Тип договора отправителя
 * source: contract-type/objects/contract-type.json
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $createDate
 * @property int $creatorId
 * @property int $partnerCount
 * @property ContractTypeAccess $access
 */
final class ContractType extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'name' => ['string'],
        'description' => ['string'],
        'createDate' => ['string'],
        'creatorId' => ['int'],
        'partnerCount' => ['int'],
        'access' => ['Cargomart\ApiClient\Entity\ContractType\Objects\ContractTypeAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'name' => false,
        'description' => false,
        'createDate' => false,
        'creatorId' => false,
        'partnerCount' => false,
        'access' => false,
    ];
}

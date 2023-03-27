<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/objects/partner-contract-with-type.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о договоре между партнёрами с информацией о типе договора
 * source: company/objects/partner-contract-with-type.json
 *
 * @property string $number
 * @property string $date
 * @property int $typeId
 * @property string $typeName
 */
final class PartnerContractWithType extends AbstractEntity
{
    protected static $types = ['number' => ['string'], 'date' => ['string'], 'typeId' => ['int'], 'typeName' => ['string']];
    protected static $nullables = ['number' => false, 'date' => false, 'typeId' => false, 'typeName' => false];
}

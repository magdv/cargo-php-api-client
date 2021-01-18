<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о договоре между партнёрами
 * source: company/objects/partner-contract-form.json
 *
 * @property string $number
 * @property string $date
 * @property int $typeId
 */
final class PartnerContractForm extends AbstractEntity
{
    protected static $types = ['number' => ['string'], 'date' => ['string'], 'typeId' => ['int']];
    protected static $nullables = ['number' => false, 'date' => false, 'typeId' => false];
}

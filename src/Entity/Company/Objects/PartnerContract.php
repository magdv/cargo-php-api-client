<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о договоре между партнёрами
 * source: company/objects/partner-contract.json
 *
 * @property bool $isActive
 * @property string $number
 * @property string $date
 */
final class PartnerContract extends AbstractEntity
{
    protected static $types = ['isActive' => ['bool'], 'number' => ['string'], 'date' => ['string']];
    protected static $nullables = ['isActive' => false, 'number' => false, 'date' => false];
}

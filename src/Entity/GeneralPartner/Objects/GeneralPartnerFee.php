<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\GeneralPartner\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект данных о комиссии
 * source: general-partner/objects/general-partner-fee.json
 *
 * @property string $type
 * @property \stdClass $value
 * @property bool $isAgency
 */
final class GeneralPartnerFee extends AbstractEntity
{
    protected static $types = ['type' => ['string'], 'value' => ['\stdClass'], 'isAgency' => ['bool']];
    protected static $nullables = ['type' => false, 'value' => true, 'isAgency' => false];
}

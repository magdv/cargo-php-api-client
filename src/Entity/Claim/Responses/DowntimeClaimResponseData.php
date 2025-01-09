<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Claim\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim;

/**
 * source: claim/responses/DowntimeClaimResponse.json#/properties/data
 *
 * @property OrderDowntimeClaim $downtimeClaim
 */
final class DowntimeClaimResponseData extends AbstractEntity
{
    protected static $types = [
        'downtimeClaim' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim'],
    ];

    protected static $nullables = ['downtimeClaim' => false];
}

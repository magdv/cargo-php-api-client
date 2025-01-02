<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DraftDocument\Mixins;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\Downtime;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimPoint;

/**
 * Общие поля претензии о простое по заявке
 * source: draft-document/mixins/DraftDocumentDowntimeClaimMixin.json
 *
 * @property \stdClass $orderId
 * @property OrderDowntimeClaimPoint[] $points
 * @property Downtime $downtime
 */
final class DraftDocumentDowntimeClaimMixin extends AbstractEntity
{
    protected static $types = [
        'orderId' => ['\stdClass'],
        'points' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimPoint'],
        'downtime' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\Downtime'],
    ];

    protected static $nullables = ['orderId' => true, 'points' => false, 'downtime' => false];
}

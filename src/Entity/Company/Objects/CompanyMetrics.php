<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Показатели работы компании
 * source: company/objects/company-metrics.json
 *
 * @property \stdClass $ordersWon
 * @property \stdClass $ordersConfirmed
 * @property \stdClass $ordersRejected
 * @property \stdClass $ordersConfirmedTime
 * @property \stdClass $ordersCreated
 * @property \stdClass $ordersQualityScore
 * @property \stdClass $ordersNotDelayed
 * @property \stdClass $ordersInSafe
 * @property \stdClass $ordersOtherConditionsOk
 */
final class CompanyMetrics extends AbstractEntity
{
    protected static $types = [
        'ordersWon' => ['\stdClass'],
        'ordersConfirmed' => ['\stdClass'],
        'ordersRejected' => ['\stdClass'],
        'ordersConfirmedTime' => ['\stdClass'],
        'ordersCreated' => ['\stdClass'],
        'ordersQualityScore' => ['\stdClass'],
        'ordersNotDelayed' => ['\stdClass'],
        'ordersInSafe' => ['\stdClass'],
        'ordersOtherConditionsOk' => ['\stdClass'],
    ];

    protected static $nullables = [
        'ordersWon' => true,
        'ordersConfirmed' => true,
        'ordersRejected' => true,
        'ordersConfirmedTime' => true,
        'ordersCreated' => true,
        'ordersQualityScore' => true,
        'ordersNotDelayed' => true,
        'ordersInSafe' => true,
        'ordersOtherConditionsOk' => true,
    ];
}

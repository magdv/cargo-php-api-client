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
 * @property int $ordersWon
 * @property float $ordersConfirmed
 * @property float $ordersRejected
 * @property int $ordersConfirmedTime
 * @property int $ordersCreated
 * @property int $ordersQualityScore
 * @property float $ordersNotDelayed
 * @property float $ordersInSafe
 * @property float $ordersOtherConditionsOk
 */
final class CompanyMetrics extends AbstractEntity
{
    protected static $types = [
        'ordersWon' => ['int'],
        'ordersConfirmed' => ['float'],
        'ordersRejected' => ['float'],
        'ordersConfirmedTime' => ['int'],
        'ordersCreated' => ['int'],
        'ordersQualityScore' => ['int'],
        'ordersNotDelayed' => ['float'],
        'ordersInSafe' => ['float'],
        'ordersOtherConditionsOk' => ['float'],
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

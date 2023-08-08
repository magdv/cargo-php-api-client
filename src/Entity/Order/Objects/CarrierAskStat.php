<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Статистика по ставкам перевозчика
 * source: order/objects/carrier-ask-stat.json
 *
 * @property int $count
 * @property string $avgPrice
 */
final class CarrierAskStat extends AbstractEntity
{
    protected static $types = ['count' => ['int'], 'avgPrice' => ['string']];
    protected static $nullables = ['count' => false, 'avgPrice' => false];
}

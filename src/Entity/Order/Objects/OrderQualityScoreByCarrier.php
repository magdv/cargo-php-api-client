<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Оценка заказа перевозчиком
 * source: order/objects/order-quality-score-by-carrier.json
 *
 * @property bool $isNotDelayed
 * @property \stdClass $delayPoint
 * @property bool $isOtherConditionsOk
 * @property \stdClass $comment
 * @property int $creatorId
 */
final class OrderQualityScoreByCarrier extends AbstractEntity
{
    protected static $types = [
        'isNotDelayed' => ['bool'],
        'delayPoint' => ['\stdClass'],
        'isOtherConditionsOk' => ['bool'],
        'comment' => ['\stdClass'],
        'creatorId' => ['int'],
    ];

    protected static $nullables = [
        'isNotDelayed' => false,
        'delayPoint' => true,
        'isOtherConditionsOk' => false,
        'comment' => true,
        'creatorId' => false,
    ];
}

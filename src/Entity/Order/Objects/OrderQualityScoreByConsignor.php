<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Оценка заказа отправителем
 * source: order/objects/order-quality-score-by-consignor.json
 *
 * @property bool $isInSafe
 * @property bool $isNotDelayed
 * @property string[] $delayPoint
 * @property string $comment
 * @property int $creatorId
 */
final class OrderQualityScoreByConsignor extends AbstractEntity
{
    protected static $types = [
        'isInSafe' => ['bool'],
        'isNotDelayed' => ['bool'],
        'delayPoint' => ['array', 'string'],
        'comment' => ['string'],
        'creatorId' => ['int'],
    ];

    protected static $nullables = [
        'isInSafe' => false,
        'isNotDelayed' => false,
        'delayPoint' => false,
        'comment' => true,
        'creatorId' => false,
    ];
}

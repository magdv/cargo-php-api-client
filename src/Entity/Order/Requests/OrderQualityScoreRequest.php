<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на создание оценки
 * source: order/requests/order-quality-score-request.json
 *
 * @property bool $isNotDelayed
 * @property string[] $delayPoint
 * @property bool $isInSafe
 * @property bool $isOtherConditionsOk
 * @property string $comment
 */
final class OrderQualityScoreRequest extends AbstractEntity
{
    protected static $types = [
        'isNotDelayed' => ['bool'],
        'delayPoint' => ['array', 'string'],
        'isInSafe' => ['bool'],
        'isOtherConditionsOk' => ['bool'],
        'comment' => ['string'],
    ];

    protected static $nullables = [
        'isNotDelayed' => false,
        'delayPoint' => false,
        'isInSafe' => false,
        'isOtherConditionsOk' => false,
        'comment' => false,
    ];
}

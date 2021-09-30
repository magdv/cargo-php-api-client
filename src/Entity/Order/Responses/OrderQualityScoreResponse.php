<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Получение оценки заказа
 * source: order/responses/order-quality-score-response.json
 *
 * @property MessageV2[] $message
 * @property OrderQualityScoreResponseData $data
 */
final class OrderQualityScoreResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderQualityScoreResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

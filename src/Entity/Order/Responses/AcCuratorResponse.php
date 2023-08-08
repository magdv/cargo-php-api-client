<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ данных для подсказки имен кураторов в поиске по заказам
 * source: order/responses/ac-curator-response.json
 *
 * @property MessageV2[] $message
 * @property AcCuratorResponseData $data
 */
final class AcCuratorResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\AcCuratorResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

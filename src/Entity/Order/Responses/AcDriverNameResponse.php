<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ данных для подсказки имен водителей в поиске по заказам
 * source: order/responses/ac-driver-name-response.json
 *
 * @property MessageV2[] $message
 * @property AcDriverNameResponseData $data
 */
final class AcDriverNameResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\AcDriverNameResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

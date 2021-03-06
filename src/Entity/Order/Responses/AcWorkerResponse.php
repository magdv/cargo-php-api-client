<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ данных для подсказки имен сотрудников
 * source: order/responses/ac-worker-response.json
 *
 * @property MessageV2[] $message
 * @property AcWorkerResponseData $data
 */
final class AcWorkerResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\AcWorkerResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

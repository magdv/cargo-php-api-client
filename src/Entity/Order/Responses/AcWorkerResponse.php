<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ данных для подсказки имен сотрудников
 * source: order/responses/ac-worker-response.json
 *
 * @property AcWorkerResponseData $data
 */
final class AcWorkerResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\AcWorkerResponseData']];
    protected static $nullables = ['data' => false];
}

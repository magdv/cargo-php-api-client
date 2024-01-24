<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ данных для поиска по справочнику водителей
 * source: order/responses/ac-driver-response.json
 *
 * @property AcDriverResponseData $data
 */
final class AcDriverResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\AcDriverResponseData']];
    protected static $nullables = ['data' => false];
}

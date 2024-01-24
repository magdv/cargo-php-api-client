<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ данных для подсказки имен водителей в поиске по заказам
 * source: order/responses/ac-driver-name-response.json
 *
 * @property AcDriverNameResponseData $data
 */
final class AcDriverNameResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\AcDriverNameResponseData']];
    protected static $nullables = ['data' => false];
}

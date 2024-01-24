<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ данных для подсказки имен кураторов в поиске по заказам
 * source: order/responses/ac-curator-response.json
 *
 * @property AcCuratorResponseData $data
 */
final class AcCuratorResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\AcCuratorResponseData']];
    protected static $nullables = ['data' => false];
}

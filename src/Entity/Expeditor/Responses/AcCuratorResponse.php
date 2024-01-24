<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ данных для подсказки имен кураторов в поиске по заказам
 * source: expeditor/responses/ac-curator-response.json
 *
 * @property AcCuratorResponseData $data
 */
final class AcCuratorResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Expeditor\Responses\AcCuratorResponseData']];
    protected static $nullables = ['data' => false];
}

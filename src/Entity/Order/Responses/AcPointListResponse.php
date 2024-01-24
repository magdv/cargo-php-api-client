<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ данных для поиска по справочнику автокомплита
 * source: order/responses/ac-point-list-response.json
 *
 * @property AcPointListResponseData $data
 */
final class AcPointListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\AcPointListResponseData']];
    protected static $nullables = ['data' => false];
}

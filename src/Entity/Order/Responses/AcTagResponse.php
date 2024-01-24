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
 * source: order/responses/ac-tag-response.json
 *
 * @property AcTagResponseData $data
 */
final class AcTagResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\AcTagResponseData']];
    protected static $nullables = ['data' => false];
}

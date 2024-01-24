<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Расширенные данные для заполнения транспортной накладной.
 * source: order/responses/waybill-additional-data-response.json
 *
 * @property WaybillAdditionalDataResponseData $data
 */
final class WaybillAdditionalDataResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\WaybillAdditionalDataResponseData']];
    protected static $nullables = ['data' => false];
}

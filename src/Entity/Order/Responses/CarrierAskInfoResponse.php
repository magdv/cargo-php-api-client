<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Информация о минимальной ставке
 * source: order/responses/carrier-ask-info-response.json
 *
 * @property CarrierAskInfoResponseData $data
 */
final class CarrierAskInfoResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\CarrierAskInfoResponseData']];
    protected static $nullables = ['data' => false];
}

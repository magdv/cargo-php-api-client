<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Количество перевозчиков, кому доступен заказ
 * source: company/responses/carrier-count-response.json
 *
 * @property CarrierCountResponseData $data
 */
final class CarrierCountResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Company\Responses\CarrierCountResponseData']];
    protected static $nullables = ['data' => false];
}

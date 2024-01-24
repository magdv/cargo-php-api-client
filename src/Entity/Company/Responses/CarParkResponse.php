<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Автопарк перевозчика
 * source: company/responses/car-park-response.json
 *
 * @property CarParkResponseData $data
 */
final class CarParkResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Company\Responses\CarParkResponseData']];
    protected static $nullables = ['data' => false];
}

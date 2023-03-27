<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/car-park-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Автопарк перевозчика
 * source: company/responses/car-park-response.json
 *
 * @property MessageV2[] $message
 * @property CarParkResponseData $data
 */
final class CarParkResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CarParkResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

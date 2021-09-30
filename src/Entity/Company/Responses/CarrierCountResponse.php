<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Количество перевозчиков, кому доступен заказ
 * source: company/responses/carrier-count-response.json
 *
 * @property MessageV2[] $message
 * @property CarrierCountResponseData $data
 */
final class CarrierCountResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CarrierCountResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

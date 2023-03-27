<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/ac-driver-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ данных для поиска по справочнику водителей
 * source: order/responses/ac-driver-response.json
 *
 * @property MessageV2[] $message
 * @property AcDriverResponseData $data
 */
final class AcDriverResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\AcDriverResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/carrier-ask-info-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Информация о минимальной ставке
 * source: order/responses/carrier-ask-info-response.json
 *
 * @property MessageV2[] $message
 * @property CarrierAskInfoResponseData $data
 */
final class CarrierAskInfoResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\CarrierAskInfoResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

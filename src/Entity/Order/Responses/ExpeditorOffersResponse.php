<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/expeditor-offers-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Объект предложений текущих цен перевозчиков
 * source: order/responses/expeditor-offers-response.json
 *
 * @property MessageV2[] $message
 * @property ExpeditorOffersResponseData $data
 */
final class ExpeditorOffersResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\ExpeditorOffersResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Объект предложений текущих цен перевозчиков
 * source: order/responses/expeditor-offers-response.json
 *
 * @property ExpeditorOffersResponseData $data
 */
final class ExpeditorOffersResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\ExpeditorOffersResponseData']];
    protected static $nullables = ['data' => false];
}

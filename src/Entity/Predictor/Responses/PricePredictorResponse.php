<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Predictor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Предсказание цены маршрута
 * source: predictor/responses/price-predictor-response.json
 *
 * @property PricePredictorResponseData $data
 */
final class PricePredictorResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Predictor\Responses\PricePredictorResponseData']];
    protected static $nullables = ['data' => false];
}

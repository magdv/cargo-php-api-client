<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Predictor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Predictor\Objects\Prediction;

/**
 * source: predictor/responses/price-predictor-response.json#/properties/data
 *
 * @property Prediction $prediction
 */
final class PricePredictorResponseData extends AbstractEntity
{
    protected static $types = ['prediction' => ['Cargomart\ApiClient\Entity\Predictor\Objects\Prediction']];
    protected static $nullables = ['prediction' => false];
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: predictor/responses/price-predictor-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Predictor\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Predictor\Objects\Prediction;

/**
 * source: predictor/responses/price-predictor-response.json#/properties/data
 *
 * @property Prediction $prediction
 * @property Locality[] $locality
 */
final class PricePredictorResponseData extends AbstractEntity
{
    protected static $types = [
        'prediction' => ['Cargomart\ApiClient\Entity\Predictor\Objects\Prediction'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
    ];

    protected static $nullables = ['prediction' => false, 'locality' => false];
}

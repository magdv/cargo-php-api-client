<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Predictor\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос предсказания цены маршрута
 * source: predictor/requests/price-predictor-request.json
 *
 * @property string $departureCode
 * @property string $destinationCode
 * @property int $truckType
 */
final class PricePredictorRequest extends AbstractEntity
{
    protected static $types = ['departureCode' => ['string'], 'destinationCode' => ['string'], 'truckType' => ['int']];
    protected static $nullables = ['departureCode' => false, 'destinationCode' => false, 'truckType' => false];
}

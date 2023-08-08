<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Predictor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект предсказания
 * source: predictor/objects/prediction.json
 *
 * @property string $price
 * @property string $departureCode
 * @property string $destinationCode
 * @property string $truckType
 * @property float $distance
 * @property float $pricePerKm
 */
final class Prediction extends AbstractEntity
{
    protected static $types = [
        'price' => ['string'],
        'departureCode' => ['string'],
        'destinationCode' => ['string'],
        'truckType' => ['string'],
        'distance' => ['float'],
        'pricePerKm' => ['float'],
    ];

    protected static $nullables = [
        'price' => false,
        'departureCode' => false,
        'destinationCode' => false,
        'truckType' => false,
        'distance' => false,
        'pricePerKm' => false,
    ];
}

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
 */
final class Prediction extends AbstractEntity
{
    protected static $types = ['price' => ['string']];
    protected static $nullables = ['price' => false];
}

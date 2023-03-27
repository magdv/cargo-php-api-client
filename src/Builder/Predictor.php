<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/predictor
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Predictor\Price;

/**
 * url: /api/v2/predictor
 */
final class Predictor extends AbstractBuilder
{
    protected const URL = '/api/v2/predictor';

    public function price(): Price
    {
        return new Price($this->params, $this->client);
    }
}

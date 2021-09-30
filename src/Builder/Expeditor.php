<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Expeditor\PriceLocal;

/**
 * url: /api/v2/expeditor
 */
final class Expeditor extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor';

    public function priceLocal(): PriceLocal
    {
        return new PriceLocal($this->params, $this->client);
    }
}

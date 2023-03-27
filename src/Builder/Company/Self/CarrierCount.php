<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company/self/carrier-count
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/self/carrier-count
 */
final class CarrierCount extends AbstractBuilder
{
    protected const URL = '/api/v2/company/self/carrier-count';

    public function get(): CarrierCountGet
    {
        return new CarrierCountGet($this->client, $this->getUrl());
    }
}

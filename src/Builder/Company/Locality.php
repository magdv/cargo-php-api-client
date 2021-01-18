<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/locality
 */
final class Locality extends AbstractBuilder
{
    protected const URL = '/api/v2/company/locality';

    public function get(): LocalityGet
    {
        return new LocalityGet($this->client, $this->getUrl());
    }
}

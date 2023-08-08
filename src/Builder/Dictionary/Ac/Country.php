<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Dictionary\Ac;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/dictionary/ac/country
 */
final class Country extends AbstractBuilder
{
    protected const URL = '/api/v2/dictionary/ac/country';

    public function get(): CountryGet
    {
        return new CountryGet($this->client, $this->getUrl());
    }
}

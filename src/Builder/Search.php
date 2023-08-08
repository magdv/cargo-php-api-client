<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/search
 */
final class Search extends AbstractBuilder
{
    protected const URL = '/api/v2/search';

    public function get(): SearchGet
    {
        return new SearchGet($this->client, $this->getUrl());
    }
}

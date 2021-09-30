<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/dictionary
 */
final class Dictionary extends AbstractBuilder
{
    protected const URL = '/api/v2/dictionary';

    public function get(): DictionaryGet
    {
        return new DictionaryGet($this->client, $this->getUrl());
    }
}

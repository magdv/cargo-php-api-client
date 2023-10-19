<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\SimpleDocument;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/simple-document/{rootId}
 */
final class RootId extends AbstractBuilder
{
    protected const URL = '/api/v2/simple-document/{rootId}';

    public function get(): RootIdGet
    {
        return new RootIdGet($this->client, $this->getUrl());
    }
}

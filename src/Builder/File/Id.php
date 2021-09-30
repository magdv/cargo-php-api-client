<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\File;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/file/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/file/{id}';

    public function delete(): IdDelete
    {
        return new IdDelete($this->client, $this->getUrl());
    }
}

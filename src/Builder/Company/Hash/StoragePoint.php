<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/storage-point
 */
final class StoragePoint extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/storage-point';

    public function get(): StoragePointGet
    {
        return new StoragePointGet($this->client, $this->getUrl());
    }
}

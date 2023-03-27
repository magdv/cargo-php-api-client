<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company/{hash}/document/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash\Document;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/document/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/document/{id}';

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }
}

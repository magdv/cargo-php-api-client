<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Claim\Downtime;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/claim/downtime/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/claim/downtime/{id}';

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }
}

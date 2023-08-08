<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Candidate;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/candidate/count
 */
final class Count extends AbstractBuilder
{
    protected const URL = '/api/v2/candidate/count';

    public function get(): CountGet
    {
        return new CountGet($this->client, $this->getUrl());
    }
}

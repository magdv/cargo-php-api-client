<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/branch
 */
final class Branch extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/branch';

    public function get(): BranchGet
    {
        return new BranchGet($this->client, $this->getUrl());
    }
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/dictionary/expeditor-branch
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Dictionary;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/dictionary/expeditor-branch
 */
final class ExpeditorBranch extends AbstractBuilder
{
    protected const URL = '/api/v2/dictionary/expeditor-branch';

    public function get(): ExpeditorBranchGet
    {
        return new ExpeditorBranchGet($this->client, $this->getUrl());
    }
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company-branch-highlighted
 */
final class CompanyBranchHighlighted extends AbstractBuilder
{
    protected const URL = '/api/v2/company-branch-highlighted';

    public function get(): CompanyBranchHighlightedGet
    {
        return new CompanyBranchHighlightedGet($this->client, $this->getUrl());
    }
}

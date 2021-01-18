<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/self/requirement
 */
final class Requirement extends AbstractBuilder
{
    protected const URL = '/api/v2/company/self/requirement';

    public function get(): RequirementGet
    {
        return new RequirementGet($this->client, $this->getUrl());
    }

    public function patch(): RequirementPatch
    {
        return new RequirementPatch($this->client, $this->getUrl());
    }
}

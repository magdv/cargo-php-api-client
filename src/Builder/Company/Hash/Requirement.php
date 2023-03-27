<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company/{hash}/requirement
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/requirement
 */
final class Requirement extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/requirement';

    public function get(): RequirementGet
    {
        return new RequirementGet($this->client, $this->getUrl());
    }

    public function patch(): RequirementPatch
    {
        return new RequirementPatch($this->client, $this->getUrl());
    }
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ContractType;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/contract-type/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/contract-type/{id}';

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }

    public function patch(): IdPatch
    {
        return new IdPatch($this->client, $this->getUrl());
    }

    public function delete(): IdDelete
    {
        return new IdDelete($this->client, $this->getUrl());
    }
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Driver;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Driver\Id\DriverAppInvite;

/**
 * url: /api/v2/driver/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/driver/{id}';

    public function driverAppInvite(): DriverAppInvite
    {
        return new DriverAppInvite($this->params, $this->client);
    }

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

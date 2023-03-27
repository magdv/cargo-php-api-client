<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company-confirmation/role
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company-confirmation/role
 */
final class Role extends AbstractBuilder
{
    protected const URL = '/api/v2/company-confirmation/role';

    public function put(): RolePut
    {
        return new RolePut($this->client, $this->getUrl());
    }

    public function delete(): RoleDelete
    {
        return new RoleDelete($this->client, $this->getUrl());
    }
}

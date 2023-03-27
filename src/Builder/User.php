<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/user
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\User\CountActive;
use Cargomart\ApiClient\Builder\User\Login;
use Cargomart\ApiClient\Builder\User\Logout;
use Cargomart\ApiClient\Builder\User\Recovery;
use Cargomart\ApiClient\Builder\User\UserSelf;

/**
 * url: /api/v2/user
 */
final class User extends AbstractBuilder
{
    protected const URL = '/api/v2/user';

    public function userSelf(): UserSelf
    {
        return new UserSelf($this->params, $this->client);
    }

    public function countActive(): CountActive
    {
        return new CountActive($this->params, $this->client);
    }

    public function recovery(): Recovery
    {
        return new Recovery($this->params, $this->client);
    }

    public function login(): Login
    {
        return new Login($this->params, $this->client);
    }

    public function logout(): Logout
    {
        return new Logout($this->params, $this->client);
    }
}

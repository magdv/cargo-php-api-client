<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/self/password-change
 */
final class PasswordChange extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self/password-change';

    public function put(): PasswordChangePut
    {
        return new PasswordChangePut($this->client, $this->getUrl());
    }
}

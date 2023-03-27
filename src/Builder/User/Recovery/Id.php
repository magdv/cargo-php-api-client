<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/user/recovery/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Recovery;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\User\Recovery\Id\Confirm;
use Cargomart\ApiClient\Builder\User\Recovery\Id\ResendCode;

/**
 * url: /api/v2/user/recovery/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/user/recovery/{id}';

    public function confirm(): Confirm
    {
        return new Confirm($this->params, $this->client);
    }

    public function resendCode(): ResendCode
    {
        return new ResendCode($this->params, $this->client);
    }

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }
}

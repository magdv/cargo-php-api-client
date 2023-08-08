<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Registration;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Registration\Id\Confirm;
use Cargomart\ApiClient\Builder\Registration\Id\ResendCode;

/**
 * url: /api/v2/registration/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/registration/{id}';

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

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Worker;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Worker\Id\Certificate;
use Cargomart\ApiClient\Builder\Worker\Id\Chat;
use Cargomart\ApiClient\Builder\Worker\Id\ContactComplain;
use Cargomart\ApiClient\Builder\Worker\Id\ResendInvite;

/**
 * url: /api/v2/worker/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/worker/{id}';

    public function contactComplain(): ContactComplain
    {
        return new ContactComplain($this->params, $this->client);
    }

    public function resendInvite(): ResendInvite
    {
        return new ResendInvite($this->params, $this->client);
    }

    public function certificate(): Certificate
    {
        return new Certificate($this->params, $this->client);
    }

    public function chat(): Chat
    {
        return new Chat($this->params, $this->client);
    }

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }

    public function put(): IdPut
    {
        return new IdPut($this->client, $this->getUrl());
    }

    public function delete(): IdDelete
    {
        return new IdDelete($this->client, $this->getUrl());
    }
}

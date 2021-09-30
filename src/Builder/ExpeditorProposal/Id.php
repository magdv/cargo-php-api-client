<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Chat;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Proxy;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Refuse;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\RefuseCarrier;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\SimpleDocument;

/**
 * url: /api/v2/expeditor-proposal/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}';

    public function refuseCarrier(): RefuseCarrier
    {
        return new RefuseCarrier($this->params, $this->client);
    }

    public function refuse(): Refuse
    {
        return new Refuse($this->params, $this->client);
    }

    public function proxy(): Proxy
    {
        return new Proxy($this->params, $this->client);
    }

    public function chat(): Chat
    {
        return new Chat($this->params, $this->client);
    }

    public function simpleDocument(): SimpleDocument
    {
        return new SimpleDocument($this->params, $this->client);
    }

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }
}

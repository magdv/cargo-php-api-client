<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Exists;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Ids;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Uuid;

/**
 * url: /api/v2/expeditor-proposal
 */
final class ExpeditorProposal extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal';

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function uuid(string $uuid): Uuid
    {
        $params = $this->params;
        $params['uuid'] = $uuid;
        return new Uuid($params, $this->client);
    }

    public function ids(): Ids
    {
        return new Ids($this->params, $this->client);
    }

    public function exists(): Exists
    {
        return new Exists($this->params, $this->client);
    }

    public function get(): ExpeditorProposalGet
    {
        return new ExpeditorProposalGet($this->client, $this->getUrl());
    }
}

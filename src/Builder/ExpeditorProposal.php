<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

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

    public function get(): ExpeditorProposalGet
    {
        return new ExpeditorProposalGet($this->client, $this->getUrl());
    }
}

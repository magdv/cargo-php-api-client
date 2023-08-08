<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Request\Lot\LotId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/tender/request/lot/{lotId}/proposal
 */
final class Proposal extends AbstractBuilder
{
    protected const URL = '/api/v2/tender/request/lot/{lotId}/proposal';

    public function get(): ProposalGet
    {
        return new ProposalGet($this->client, $this->getUrl());
    }
}

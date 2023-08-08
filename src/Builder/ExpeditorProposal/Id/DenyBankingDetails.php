<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/deny-banking-details
 */
final class DenyBankingDetails extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/deny-banking-details';

    public function post(): DenyBankingDetailsPost
    {
        return new DenyBankingDetailsPost($this->client, $this->getUrl());
    }
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/claim
 */
final class Claim extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/claim';

    public function get(): ClaimGet
    {
        return new ClaimGet($this->client, $this->getUrl());
    }
}

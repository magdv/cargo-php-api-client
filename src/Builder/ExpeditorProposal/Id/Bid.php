<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-proposal/{id}/bid
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/bid
 */
final class Bid extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/bid';

    public function get(): BidGet
    {
        return new BidGet($this->client, $this->getUrl());
    }
}

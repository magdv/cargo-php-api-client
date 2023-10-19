<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/expeditor-offer
 */
final class ExpeditorOffer extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/expeditor-offer';

    public function get(): ExpeditorOfferGet
    {
        return new ExpeditorOfferGet($this->client, $this->getUrl());
    }
}

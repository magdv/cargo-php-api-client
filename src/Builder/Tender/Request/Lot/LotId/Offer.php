<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Request\Lot\LotId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/tender/request/lot/{lotId}/offer
 */
final class Offer extends AbstractBuilder
{
    protected const URL = '/api/v2/tender/request/lot/{lotId}/offer';

    public function post(): OfferPost
    {
        return new OfferPost($this->client, $this->getUrl());
    }

    public function delete(): OfferDelete
    {
        return new OfferDelete($this->client, $this->getUrl());
    }
}

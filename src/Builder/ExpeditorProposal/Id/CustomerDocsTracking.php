<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/customer-docs-tracking
 */
final class CustomerDocsTracking extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/customer-docs-tracking';

    public function post(): CustomerDocsTrackingPost
    {
        return new CustomerDocsTrackingPost($this->client, $this->getUrl());
    }
}

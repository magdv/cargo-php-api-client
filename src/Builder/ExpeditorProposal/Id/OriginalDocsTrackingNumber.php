<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/original-docs-tracking-number
 */
final class OriginalDocsTrackingNumber extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/original-docs-tracking-number';

    public function post(): OriginalDocsTrackingNumberPost
    {
        return new OriginalDocsTrackingNumberPost($this->client, $this->getUrl());
    }
}

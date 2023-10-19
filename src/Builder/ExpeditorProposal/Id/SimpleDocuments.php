<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/simple-documents
 */
final class SimpleDocuments extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/simple-documents';

    public function get(): SimpleDocumentsGet
    {
        return new SimpleDocumentsGet($this->client, $this->getUrl());
    }
}

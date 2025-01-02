<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/signed-document
 */
final class SignedDocument extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/signed-document';

    public function get(): SignedDocumentGet
    {
        return new SignedDocumentGet($this->client, $this->getUrl());
    }
}

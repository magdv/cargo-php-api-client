<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\SignedDocument;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\SignedDocument\Id\Pdf;

/**
 * url: /api/v2/signed-document/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/signed-document/{id}';

    public function pdf(): Pdf
    {
        return new Pdf($this->params, $this->client);
    }

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }
}

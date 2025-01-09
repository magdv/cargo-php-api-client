<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\DraftDocument;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\DraftDocument\Id\Pdf;

/**
 * url: /api/v2/draft-document/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/draft-document/{id}';

    public function pdf(): Pdf
    {
        return new Pdf($this->params, $this->client);
    }

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }

    public function put(): IdPut
    {
        return new IdPut($this->client, $this->getUrl());
    }

    public function delete(): IdDelete
    {
        return new IdDelete($this->client, $this->getUrl());
    }
}

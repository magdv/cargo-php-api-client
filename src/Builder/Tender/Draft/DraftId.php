<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Draft;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Tender\Draft\DraftId\Publish;

/**
 * url: /api/v2/tender/draft/{draftId}
 */
final class DraftId extends AbstractBuilder
{
    protected const URL = '/api/v2/tender/draft/{draftId}';

    public function publish(): Publish
    {
        return new Publish($this->params, $this->client);
    }

    public function get(): DraftIdGet
    {
        return new DraftIdGet($this->client, $this->getUrl());
    }

    public function put(): DraftIdPut
    {
        return new DraftIdPut($this->client, $this->getUrl());
    }

    public function delete(): DraftIdDelete
    {
        return new DraftIdDelete($this->client, $this->getUrl());
    }
}

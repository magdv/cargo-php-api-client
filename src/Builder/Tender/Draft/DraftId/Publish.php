<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/tender/draft/{draftId}/publish
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Draft\DraftId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/tender/draft/{draftId}/publish
 */
final class Publish extends AbstractBuilder
{
    protected const URL = '/api/v2/tender/draft/{draftId}/publish';

    public function post(): PublishPost
    {
        return new PublishPost($this->client, $this->getUrl());
    }
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Tender\Draft\DraftId;

/**
 * url: /api/v2/tender/draft
 */
final class Draft extends AbstractBuilder
{
    protected const URL = '/api/v2/tender/draft';

    public function draftId(string $draftId): DraftId
    {
        $params = $this->params;
        $params['draftId'] = $draftId;
        return new DraftId($params, $this->client);
    }

    public function get(): DraftGet
    {
        return new DraftGet($this->client, $this->getUrl());
    }

    public function post(): DraftPost
    {
        return new DraftPost($this->client, $this->getUrl());
    }
}

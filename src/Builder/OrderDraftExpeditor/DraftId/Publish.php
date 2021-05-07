<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftExpeditor\DraftId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-draft-expeditor/{draftId}/publish
 */
final class Publish extends AbstractBuilder
{
    protected const URL = '/api/v2/order-draft-expeditor/{draftId}/publish';

    public function post(): PublishPost
    {
        return new PublishPost($this->client, $this->getUrl());
    }
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\OrderDraft\DraftId;

/**
 * url: /api/v2/order-draft
 */
final class OrderDraft extends AbstractBuilder
{
    protected const URL = '/api/v2/order-draft';

    public function draftId(string $draftId): DraftId
    {
        $params = $this->params;
        $params['draftId'] = $draftId;
        return new DraftId($params, $this->client);
    }

    public function get(): OrderDraftGet
    {
        return new OrderDraftGet($this->client, $this->getUrl());
    }

    public function post(): OrderDraftPost
    {
        return new OrderDraftPost($this->client, $this->getUrl());
    }
}

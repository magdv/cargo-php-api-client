<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftFtl;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-draft-ftl/{draftId}
 */
final class DraftId extends AbstractBuilder
{
    protected const URL = '/api/v2/order-draft-ftl/{draftId}';

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

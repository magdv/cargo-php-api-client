<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDocument;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-document/{documentId}
 */
final class DocumentId extends AbstractBuilder
{
    protected const URL = '/api/v2/order-document/{documentId}';

    public function get(): DocumentIdGet
    {
        return new DocumentIdGet($this->client, $this->getUrl());
    }

    public function put(): DocumentIdPut
    {
        return new DocumentIdPut($this->client, $this->getUrl());
    }

    public function delete(): DocumentIdDelete
    {
        return new DocumentIdDelete($this->client, $this->getUrl());
    }
}

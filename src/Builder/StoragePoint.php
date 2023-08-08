<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\StoragePoint\Id;

/**
 * url: /api/v2/storage-point
 */
final class StoragePoint extends AbstractBuilder
{
    protected const URL = '/api/v2/storage-point';

    public function id(int $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): StoragePointGet
    {
        return new StoragePointGet($this->client, $this->getUrl());
    }

    public function post(): StoragePointPost
    {
        return new StoragePointPost($this->client, $this->getUrl());
    }

    public function delete(): StoragePointDelete
    {
        return new StoragePointDelete($this->client, $this->getUrl());
    }
}

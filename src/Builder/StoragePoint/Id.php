<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/storage-point/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\StoragePoint;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\StoragePoint\Id\Contact;

/**
 * url: /api/v2/storage-point/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/storage-point/{id}';

    public function contact(): Contact
    {
        return new Contact($this->params, $this->client);
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

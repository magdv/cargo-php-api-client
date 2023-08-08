<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\StoragePoint\Id\Contact;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/storage-point/{id}/contact/{contactId}
 */
final class ContactId extends AbstractBuilder
{
    protected const URL = '/api/v2/storage-point/{id}/contact/{contactId}';

    public function put(): ContactIdPut
    {
        return new ContactIdPut($this->client, $this->getUrl());
    }

    public function delete(): ContactIdDelete
    {
        return new ContactIdDelete($this->client, $this->getUrl());
    }
}

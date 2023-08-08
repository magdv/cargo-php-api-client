<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\StoragePoint\Id;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\StoragePoint\Id\Contact\ContactId;

/**
 * url: /api/v2/storage-point/{id}/contact
 */
final class Contact extends AbstractBuilder
{
    protected const URL = '/api/v2/storage-point/{id}/contact';

    public function contactId(int $contactId): ContactId
    {
        $params = $this->params;
        $params['contactId'] = $contactId;
        return new ContactId($params, $this->client);
    }

    public function get(): ContactGet
    {
        return new ContactGet($this->client, $this->getUrl());
    }

    public function post(): ContactPost
    {
        return new ContactPost($this->client, $this->getUrl());
    }
}

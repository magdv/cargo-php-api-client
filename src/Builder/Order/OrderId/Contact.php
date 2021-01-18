<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/contact
 */
final class Contact extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/contact';

    public function get(): ContactGet
    {
        return new ContactGet($this->client, $this->getUrl());
    }

    public function patch(): ContactPatch
    {
        return new ContactPatch($this->client, $this->getUrl());
    }

    public function delete(): ContactDelete
    {
        return new ContactDelete($this->client, $this->getUrl());
    }
}

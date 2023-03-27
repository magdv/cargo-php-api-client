<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/user/self/contact-email
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/self/contact-email
 */
final class ContactEmail extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self/contact-email';

    public function post(): ContactEmailPost
    {
        return new ContactEmailPost($this->client, $this->getUrl());
    }

    public function delete(): ContactEmailDelete
    {
        return new ContactEmailDelete($this->client, $this->getUrl());
    }
}

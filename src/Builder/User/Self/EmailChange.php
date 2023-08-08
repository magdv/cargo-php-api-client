<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/self/email-change
 */
final class EmailChange extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self/email-change';

    public function post(): EmailChangePost
    {
        return new EmailChangePost($this->client, $this->getUrl());
    }

    public function delete(): EmailChangeDelete
    {
        return new EmailChangeDelete($this->client, $this->getUrl());
    }
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/self/phone-change
 */
final class PhoneChange extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self/phone-change';

    public function post(): PhoneChangePost
    {
        return new PhoneChangePost($this->client, $this->getUrl());
    }

    public function delete(): PhoneChangeDelete
    {
        return new PhoneChangeDelete($this->client, $this->getUrl());
    }
}

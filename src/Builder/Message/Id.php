<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Message;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/message/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/message/{id}';

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }

    public function delete(): IdDelete
    {
        return new IdDelete($this->client, $this->getUrl());
    }
}

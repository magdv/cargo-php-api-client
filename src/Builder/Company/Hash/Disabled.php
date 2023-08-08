<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/disabled
 */
final class Disabled extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/disabled';

    public function post(): DisabledPost
    {
        return new DisabledPost($this->client, $this->getUrl());
    }

    public function delete(): DisabledDelete
    {
        return new DisabledDelete($this->client, $this->getUrl());
    }
}

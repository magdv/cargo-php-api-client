<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company/self/logo
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/self/logo
 */
final class Logo extends AbstractBuilder
{
    protected const URL = '/api/v2/company/self/logo';

    public function get(): LogoGet
    {
        return new LogoGet($this->client, $this->getUrl());
    }

    public function post(): LogoPost
    {
        return new LogoPost($this->client, $this->getUrl());
    }

    public function delete(): LogoDelete
    {
        return new LogoDelete($this->client, $this->getUrl());
    }
}

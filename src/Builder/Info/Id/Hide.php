<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Info\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/info/{id}/hide
 */
final class Hide extends AbstractBuilder
{
    protected const URL = '/api/v2/info/{id}/hide';

    public function post(): HidePost
    {
        return new HidePost($this->client, $this->getUrl());
    }
}

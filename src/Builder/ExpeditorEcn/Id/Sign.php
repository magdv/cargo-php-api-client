<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-ecn/{id}/sign
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorEcn\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-ecn/{id}/sign
 */
final class Sign extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-ecn/{id}/sign';

    public function post(): SignPost
    {
        return new SignPost($this->client, $this->getUrl());
    }
}

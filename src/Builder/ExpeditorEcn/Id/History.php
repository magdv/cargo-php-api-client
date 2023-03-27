<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-ecn/{id}/history
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorEcn\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-ecn/{id}/history
 */
final class History extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-ecn/{id}/history';

    public function get(): HistoryGet
    {
        return new HistoryGet($this->client, $this->getUrl());
    }
}

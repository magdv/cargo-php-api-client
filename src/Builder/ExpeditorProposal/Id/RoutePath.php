<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-proposal/{id}/route-path
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/route-path
 */
final class RoutePath extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/route-path';

    public function get(): RoutePathGet
    {
        return new RoutePathGet($this->client, $this->getUrl());
    }
}

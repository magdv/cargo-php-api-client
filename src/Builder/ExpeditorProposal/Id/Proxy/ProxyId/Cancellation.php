<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-proposal/{id}/proxy/{proxyId}/cancellation
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Proxy\ProxyId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/proxy/{proxyId}/cancellation
 */
final class Cancellation extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/proxy/{proxyId}/cancellation';

    public function post(): CancellationPost
    {
        return new CancellationPost($this->client, $this->getUrl());
    }
}

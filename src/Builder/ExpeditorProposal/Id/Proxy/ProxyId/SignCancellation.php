<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Proxy\ProxyId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/proxy/{proxyId}/sign-cancellation
 */
final class SignCancellation extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/proxy/{proxyId}/sign-cancellation';

    public function post(): SignCancellationPost
    {
        return new SignCancellationPost($this->client, $this->getUrl());
    }
}

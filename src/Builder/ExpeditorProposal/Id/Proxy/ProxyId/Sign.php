<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-proposal/{id}/proxy/{proxyId}/sign
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Proxy\ProxyId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/proxy/{proxyId}/sign
 */
final class Sign extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/proxy/{proxyId}/sign';

    public function post(): SignPost
    {
        return new SignPost($this->client, $this->getUrl());
    }
}

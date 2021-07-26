<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Proxy\ProxyId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/proxy/{proxyId}/file
 */
final class File extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/proxy/{proxyId}/file';

    public function post(): FilePost
    {
        return new FilePost($this->client, $this->getUrl());
    }
}

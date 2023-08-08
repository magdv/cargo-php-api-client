<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Proxy\ProxyId;

/**
 * url: /api/v2/expeditor-proposal/{id}/proxy
 */
final class Proxy extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/proxy';

    public function proxyId(string $proxyId): ProxyId
    {
        $params = $this->params;
        $params['proxyId'] = $proxyId;
        return new ProxyId($params, $this->client);
    }
}

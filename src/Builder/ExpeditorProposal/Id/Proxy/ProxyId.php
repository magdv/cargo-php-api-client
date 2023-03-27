<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-proposal/{id}/proxy/{proxyId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Proxy;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Proxy\ProxyId\Cancellation;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Proxy\ProxyId\File;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Proxy\ProxyId\Sign;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Proxy\ProxyId\SignCancellation;

/**
 * url: /api/v2/expeditor-proposal/{id}/proxy/{proxyId}
 */
final class ProxyId extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/proxy/{proxyId}';

    public function file(): File
    {
        return new File($this->params, $this->client);
    }

    public function sign(): Sign
    {
        return new Sign($this->params, $this->client);
    }

    public function cancellation(): Cancellation
    {
        return new Cancellation($this->params, $this->client);
    }

    public function signCancellation(): SignCancellation
    {
        return new SignCancellation($this->params, $this->client);
    }
}

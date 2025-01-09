<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractUpdates;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ExpeditorContractUpdates\Signer\SendCode;

/**
 * url: /api/v2/expeditor-contract-updates/signer
 */
final class Signer extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-contract-updates/signer';

    public function sendCode(): SendCode
    {
        return new SendCode($this->params, $this->client);
    }

    public function post(): SignerPost
    {
        return new SignerPost($this->client, $this->getUrl());
    }
}

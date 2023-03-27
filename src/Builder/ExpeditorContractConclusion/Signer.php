<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-contract-conclusion/signer
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractConclusion;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-contract-conclusion/signer
 */
final class Signer extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-contract-conclusion/signer';

    public function post(): SignerPost
    {
        return new SignerPost($this->client, $this->getUrl());
    }
}

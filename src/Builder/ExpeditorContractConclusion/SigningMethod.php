<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractConclusion;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-contract-conclusion/signing-method
 */
final class SigningMethod extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-contract-conclusion/signing-method';

    public function post(): SigningMethodPost
    {
        return new SigningMethodPost($this->client, $this->getUrl());
    }
}

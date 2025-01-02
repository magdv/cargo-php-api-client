<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractUpdates\Signer;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-contract-updates/signer/send-code
 */
final class SendCode extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-contract-updates/signer/send-code';

    public function post(): SendCodePost
    {
        return new SendCodePost($this->client, $this->getUrl());
    }
}

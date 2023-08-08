<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/partner-accept
 */
final class PartnerAccept extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/partner-accept';

    public function put(): PartnerAcceptPut
    {
        return new PartnerAcceptPut($this->client, $this->getUrl());
    }
}

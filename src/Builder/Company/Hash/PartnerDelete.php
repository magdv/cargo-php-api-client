<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/partner-delete
 */
final class PartnerDelete extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/partner-delete';

    public function put(): PartnerDeletePut
    {
        return new PartnerDeletePut($this->client, $this->getUrl());
    }
}

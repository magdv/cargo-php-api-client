<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/partner-reject
 */
final class PartnerReject extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/partner-reject';

    public function put(): PartnerRejectPut
    {
        return new PartnerRejectPut($this->client, $this->getUrl());
    }
}

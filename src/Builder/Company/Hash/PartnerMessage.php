<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company/{hash}/partner-message
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/partner-message
 */
final class PartnerMessage extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/partner-message';

    public function get(): PartnerMessageGet
    {
        return new PartnerMessageGet($this->client, $this->getUrl());
    }
}

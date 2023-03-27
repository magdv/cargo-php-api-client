<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company/{hash}/partner-conditions
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/partner-conditions
 */
final class PartnerConditions extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/partner-conditions';

    public function get(): PartnerConditionsGet
    {
        return new PartnerConditionsGet($this->client, $this->getUrl());
    }

    public function patch(): PartnerConditionsPatch
    {
        return new PartnerConditionsPatch($this->client, $this->getUrl());
    }
}

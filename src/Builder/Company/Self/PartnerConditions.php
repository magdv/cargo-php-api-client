<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/self/partner-conditions
 */
final class PartnerConditions extends AbstractBuilder
{
    protected const URL = '/api/v2/company/self/partner-conditions';

    public function get(): PartnerConditionsGet
    {
        return new PartnerConditionsGet($this->client, $this->getUrl());
    }

    public function patch(): PartnerConditionsPatch
    {
        return new PartnerConditionsPatch($this->client, $this->getUrl());
    }
}

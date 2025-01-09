<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Claim\Downtime;

/**
 * url: /api/v2/claim
 */
final class Claim extends AbstractBuilder
{
    protected const URL = '/api/v2/claim';

    public function downtime(): Downtime
    {
        return new Downtime($this->params, $this->client);
    }

    public function get(): ClaimGet
    {
        return new ClaimGet($this->client, $this->getUrl());
    }
}

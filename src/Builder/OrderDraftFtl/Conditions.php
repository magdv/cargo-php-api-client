<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftFtl;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-draft-ftl/conditions
 */
final class Conditions extends AbstractBuilder
{
    protected const URL = '/api/v2/order-draft-ftl/conditions';

    public function get(): ConditionsGet
    {
        return new ConditionsGet($this->client, $this->getUrl());
    }
}

<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order-draft-ftl/validate
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftFtl;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-draft-ftl/validate
 */
final class Validate extends AbstractBuilder
{
    protected const URL = '/api/v2/order-draft-ftl/validate';

    public function post(): ValidatePost
    {
        return new ValidatePost($this->client, $this->getUrl());
    }
}

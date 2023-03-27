<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order-draft-expeditor/validate
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftExpeditor;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-draft-expeditor/validate
 */
final class Validate extends AbstractBuilder
{
    protected const URL = '/api/v2/order-draft-expeditor/validate';

    public function post(): ValidatePost
    {
        return new ValidatePost($this->client, $this->getUrl());
    }
}

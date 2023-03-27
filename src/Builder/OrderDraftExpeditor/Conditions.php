<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order-draft-expeditor/conditions
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftExpeditor;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-draft-expeditor/conditions
 */
final class Conditions extends AbstractBuilder
{
    protected const URL = '/api/v2/order-draft-expeditor/conditions';

    public function get(): ConditionsGet
    {
        return new ConditionsGet($this->client, $this->getUrl());
    }
}

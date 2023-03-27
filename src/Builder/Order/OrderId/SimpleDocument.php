<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/simple-document
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/simple-document
 */
final class SimpleDocument extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/simple-document';

    public function get(): SimpleDocumentGet
    {
        return new SimpleDocumentGet($this->client, $this->getUrl());
    }
}

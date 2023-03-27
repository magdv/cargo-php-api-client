<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/original-docs-accept
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/original-docs-accept
 */
final class OriginalDocsAccept extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/original-docs-accept';

    public function post(): OriginalDocsAcceptPost
    {
        return new OriginalDocsAcceptPost($this->client, $this->getUrl());
    }
}

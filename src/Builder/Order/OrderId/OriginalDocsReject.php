<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/original-docs-reject
 */
final class OriginalDocsReject extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/original-docs-reject';

    public function post(): OriginalDocsRejectPost
    {
        return new OriginalDocsRejectPost($this->client, $this->getUrl());
    }
}

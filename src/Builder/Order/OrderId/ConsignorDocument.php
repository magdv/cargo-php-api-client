<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/consignor-document
 */
final class ConsignorDocument extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/consignor-document';

    public function post(): ConsignorDocumentPost
    {
        return new ConsignorDocumentPost($this->client, $this->getUrl());
    }
}

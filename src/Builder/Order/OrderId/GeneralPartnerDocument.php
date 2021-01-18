<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/general-partner-document
 */
final class GeneralPartnerDocument extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/general-partner-document';

    public function post(): GeneralPartnerDocumentPost
    {
        return new GeneralPartnerDocumentPost($this->client, $this->getUrl());
    }
}

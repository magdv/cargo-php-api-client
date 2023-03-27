<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/correction/{correctionId}/history
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Correction\CorrectionId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/correction/{correctionId}/history
 */
final class History extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/correction/{correctionId}/history';

    public function get(): HistoryGet
    {
        return new HistoryGet($this->client, $this->getUrl());
    }
}
